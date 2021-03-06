<?php


namespace App\Controllers;

use App\Models\Navigation;

class Admin_Controller extends Base_Admin_Controller
{

    protected $articles;
    protected $current_page;
    protected $href;
    protected $navigation_object;
    protected $navigation;
    protected $total_posts;
    protected $table_name = 'articles';

    protected function input($params = []){
        parent::input();

        $this->title = "Админ панель";
        $this->href = "admin";
        $this->scripts = ['jQuery','bootstrap.min','admin_scripts'];

        $this->current_page = $params['page'] ?? 1;

        $this->navigation_object = new Navigation($this->current_page,$this->table_name);

        $this->total_posts = $this->navigation_object->count_articles();

        $this->articles = $this->navigation_object->get_articles();
        $this->navigation = $this->navigation_object->get_navigation($this->total_posts);

    }

    protected function output(){

        $this->content = $this->render([
            'articles' => $this->articles,
            'navigation' => $this->navigation

        ],'App/Views/blocks/admin_blocks/admin_content');

        $this->page = parent::output();

    }



}