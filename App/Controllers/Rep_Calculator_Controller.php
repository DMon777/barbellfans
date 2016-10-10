<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 08.10.2016
 * Time: 20:36
 */

namespace App\Controllers;


class Rep_Calculator_Controller extends Base_Controller
{

    protected function input($params = []){
        parent::input();

        $this->title.= "Калькулятор повторений";
        $this->scripts[] = "rep_calculator";

    }


    protected function output(){

        $this->content = $this->render([

        ],'App/Views/blocks/rep_calculator_content');

        $this->page = parent::output();
    }

}