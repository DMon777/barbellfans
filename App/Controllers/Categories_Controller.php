<?php
namespace App\Controllers;

use App\Models\Menu_Model;
use App\Models\Navigation;

class Categories_Controller extends Base_Controller
{

    protected $navigation_object;
    protected $current_page;
    protected $table_name = 'articles';
    protected $total_posts;
    protected $articles;
    protected $category_name;
    protected $category_title;
    protected $bread_crumbs;

    protected function input($params = []){
        parent::input();

        $this->current_page = $params['page'] ?? 1;

        if(!is_numeric($this->current_page)){
            throw new Controller_Exception();
        }

        $this->navigation_object = new Navigation($this->current_page,$this->table_name);
        $this->category_name = $params['id'];
        $this->title = Menu_Model::instance()->get_category_title($this->category_name)." | Barbellfans";
        $this->keywords = "Бодибилдинг,как накачать мышцы,".Menu_Model::instance()->get_category_title($this->category_name);
        $this->description = "Barbellfans.ru - сайт для любителей бодибилдинга и о том как накачать мышцы";
        $this->bread_crumbs = Menu_Model::instance()->get_category_title($this->category_name);
        $this->href = 'categories/id/'.$this->category_name;
        $this->articles = $this->navigation_object->get_articles_by_category($this->category_name);
        $this->total_posts = $this->navigation_object->count_articles_by_category($this->category_name);
        $this->navigation = $this->navigation_object->get_navigation($this->total_posts);
    }

    protected function output(){

        $this->content = $this->render([
            'navigation' => $this->navigation,
            'articles'   => $this->articles,
            'category_name' => $this->category_title,
            'href' => $this->href,
            'bread_crumbs' => $this->bread_crumbs
            ],'App/Views/blocks/index_content');

        $this->page = parent::output();
    }



}