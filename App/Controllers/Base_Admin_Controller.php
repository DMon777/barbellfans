<?php

namespace App\Controllers;


class Base_Admin_Controller extends Main_Controller
{

    protected $header;
    protected $content;
    protected $footer;
    protected $title;
    protected $scripts;
    protected $close = true;


    protected function input($params = []){
        parent::input();

    }

    protected function output(){

        $this->header = $this->render(['title' => $this->title,'scripts' => $this->scripts],'App/Views/blocks/admin_blocks/header');

        $this->footer = $this->render([],'App/Views/blocks/admin_blocks/footer');

        $page = $this->render([
            'header'   => $this->header,
            'footer'   => $this->footer,
            'content'  => $this->content
        ],
            'App/Views/blocks/admin_blocks/base_template');

        return $page;

    }

}