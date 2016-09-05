<?php

namespace App\Controllers;

use App\Models\Articles_Model;
use App\Models\Menu_Model;

class Sitemap_Controller extends Base_Controller
{

    protected $categories_tree;
    protected $articles;


    protected function input($params = []){
        parent::input();
        $this->title = "Карта сайта";
        //$this->categories = Articles_Model::instance()->get_all_categories();

        $this->categories_tree = Menu_Model::instance()->make_sitemap_tree();

    }

    protected function output(){

        $this->content = $this->render([
            'menu'       => $this->menu,
            'categories_tree' => $this->categories_tree
        ],
            'App/Views/blocks/sitemap_content');

        $this->page = parent::output();
    }


}