<?php

namespace App\Controllers;


class Page404_Controller extends Base_Controller
{

    protected function input($params = array()){
        parent::input();

        $this->title = "page 404";

    }

    protected function output(){

        $this->content = $this->render(array(),'App/Views/blocks/page404_content');
        $this->page = parent::output();

    }


}