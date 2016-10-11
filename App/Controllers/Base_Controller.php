<?php
namespace App\Controllers;

use App\Models\Menu_Model;
use App\Models\Tags_Model;


abstract class Base_Controller extends Main_Controller
{
    protected $header;
    protected $title;
    protected $side_bar;
    protected $content;
    protected $menu;
    protected $keywords;
    protected $description;
    protected $footer;
    protected $navigation_block;
    protected $need_navigation_block = true;
    protected $href;
    protected $navigation;
    protected $scripts = [];
    protected $all_tags;

    protected function input($params = []){
            parent::input();

        $this->scripts = ['jQuery','scripts'];

        $this->menu = Menu_Model::instance()->make_menu_tree();

        $this->all_tags = Tags_Model::instance()->get_all_tags();


    }

    protected function output(){
        $this->header = $this->render([
            'title'       => $this->title,
            'description' => $this->description,
            'keywords'    => $this->keywords,
            'menu'        => $this->menu,
            'scripts'     => $this->scripts],
            'App/Views/blocks/header');

        $this->side_bar = $this->render(['all_tags' => $this->all_tags],'App/Views//blocks/sidebar');

        $this->footer = $this->render([],'App/Views//blocks/footer');

        $page = $this->render([
            'header'        => $this->header,
            'footer'        => $this->footer,
            'content'       => $this->content,
            'side_bar'      => $this->side_bar],
            'App/Views/blocks/base_template');
        return $page;
    }

}