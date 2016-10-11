<?php
namespace App\Controllers;


use App\Models\Navigation;

class Index_Controller extends Base_Controller
{

    protected $navigation_object;
    protected $current_page;
    protected $table_name = 'articles';
    protected $total_posts;
    protected $articles;

    protected function input($params = []){
        parent::input();

        $this->title = "Главная | Barbellfans.ru - сайт для любителей бодибилдинга!";
        $this->keywords = "Бодибилдинг,как накачать мышцы";
        $this->description = "Barbellfans.ru - сайт для любителей бодибилдинга и о том как накачать мышцы";
        $this->current_page = $params['page'] ?? 1;
        $this->href = 'index';

        if(!is_numeric($this->current_page)){
            throw new Controller_Exception();
        }

        $this->navigation_object = new Navigation($this->current_page,$this->table_name);
        $this->total_posts = $this->navigation_object->count_articles();

        $this->navigation = $this->navigation_object->get_navigation($this->total_posts);

        $this->articles = $this->navigation_object->get_articles();

    }

    protected function output(){

        $this->content = $this->render([
            'navigation' => $this->navigation,
            'articles'   => $this->articles,
            'href' => $this->href
            ],
            'App/Views/blocks/index_content');
        $this->page = parent::output();
    }

}