<?php

namespace App\Controllers;


use App\Models\Menu_Model;


class Edit_Category_Controller extends Base_Admin_Controller
{

    protected $categories;
    protected $parent_categories;
    protected $menu;
    protected $sorting_menu;


    public function input($params = [])
    {
        parent::input();

        $this->title = "Редактировать категории";
        $this->scripts = ['jQuery','jquery-ui-1.10.1.custom.min','sort'];

        if ($_POST['sort']) {
            Menu_Model::instance()->menu_sorting($_POST['sorting']);
        }

        if($_POST['change_parent']){
            Menu_Model::instance()->change_parent($_POST['change_parents']);
        }

        if($_POST['add_parent']){
        Menu_Model::instance()->add_category($_POST['parent_category'],$_POST['parent_href']);
        }

        if($_POST['add_subsidiary']){

            Menu_Model::instance()->add_category($_POST['subsidiary_category'],
                $_POST['subsidiary_href'],$_POST['category_parent']);
        }

        if($_POST['change_menu_name']){
            Menu_Model::instance()->change_menu_name($_POST['menu_name'],$_POST['menu_href']);
        }


        $this->categories = Menu_Model::instance()->make_menu_tree();
        $this->menu = Menu_Model::instance()->get_all_categories();
        $this->parent_categories = Menu_Model::instance()->get_parent_categories();

        ob_start();
        Menu_Model::instance()->print_sorting_menu_tree($this->categories);
        $this->sorting_menu = ob_get_contents();
        ob_end_clean();

    }

    public function output(){

        $this->content = $this->render(
            [
                'categories' => $this->categories,
                'parent_categories' => $this->parent_categories,
                'menu' => $this->menu,
                'sorting_menu' => $this->sorting_menu
            ],
            'App/Views/blocks/admin_blocks/edit_category'
        );
        $this->page = parent::output();
    }

}