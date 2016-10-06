<?php


namespace App\Controllers;

use App\Models\Admin_Navigation;

class Admin_Controller extends Base_Admin_Controller
{

    protected $articles;
    protected $current_page;
    protected $href;
    protected $navigation_object;
    protected $navigation;
    protected $total_posts;

    protected function input($params = []){
        parent::input();

        $this->title = "Админ панель";
        $this->href = "admin";

        $this->current_page = $_GET['page'] ?? 1;

        $this->navigation_object = new Admin_Navigation($this->current_page);

        $this->articles = $this->navigation_object->get_articles();


    }

    protected function output(){

        $this->content = $this->render([
            'articles' => $this->articles,


        ],'App/Views/blocks/admin_blocks/admin_content');

        $this->page = parent::output();

    }



}