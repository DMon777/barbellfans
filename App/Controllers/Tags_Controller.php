<?php

namespace App\Controllers;

use App\Models\Tags_Model;
use App\Models\Navigation;

class Tags_Controller extends Base_Controller
{

    protected $articles;
    protected $tag;
    protected $current_page;
    protected $total_posts;
    protected $navigation_object;
    protected $table_name = 'articles';
    protected $bread_crubms;

    protected function input($params = array()){
        parent::input();

        $this->tag = $params['title'];
        $this->title .= Tags_Model::instance()->get_tag_title($this->tag);
        $this->bread_crubms = Tags_Model::instance()->get_tag_title($this->tag);
        $this->href = 'tags/title/'.$this->tag;
        $this->current_page = $params['page'] ?? 1;

        if(!is_numeric($this->current_page)){
            throw new Controller_Exception();
        }

        $this->navigation_object = new Navigation($this->current_page,$this->table_name);
        $this->total_posts = $this->navigation_object->count_articles_by_tags($this->tag);
        $this->articles = $this->navigation_object->get_articles_by_tag($this->tag);
        $this->navigation = $this->navigation_object->get_navigation($this->total_posts);
    }

    protected function output(){

        $this->content = $this->render([
            'articles' => $this->articles,
            'navigation' => $this->navigation,
            'href' => $this->href,
            'bread_crumbs' => $this->bread_crubms
            ],
            'App/Views/blocks/index_content');

        $this->page = parent::output();
    }


}