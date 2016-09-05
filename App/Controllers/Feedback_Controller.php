<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 04.09.2016
 * Time: 18:39
 */

namespace App\Controllers;


class Feedback_Controller extends Base_Controller
{


    protected function input($params = []){
        parent::input();

        $this->title .= "Обратная связь";


    }

    protected function output(){

        $this->content = $this->render([

        ],
            'App/Views/blocks/feedback_content');
        $this->page = parent::output();
    }


}