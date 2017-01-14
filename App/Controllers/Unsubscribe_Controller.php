<?php

namespace App\Controllers;

use App\Models\Subscribe_Model;


class Unsubscribe_Controller extends Base_Controller
{

   protected $unsubscriber_email;

    protected function input($params = []){
        parent::input();

        $this->title = "Отказ от подписки | Barbellfans";
        $this->unsubscriber_email = $params['email'];

        Subscribe_Model::instance()->delete_subscriber($this->unsubscriber_email);
    }

    protected function output(){

        $this->content = $this->render([

        ],'App/Views/blocks/unsubscribe_content');

        $this->page = parent::output();
    }



}