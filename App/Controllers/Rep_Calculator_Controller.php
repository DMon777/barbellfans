<?php

namespace App\Controllers;


class Rep_Calculator_Controller extends Base_Controller
{

    protected function input($params = []){
        parent::input();

        $this->title.= "Калькулятор повторений | Barbellfans";
        $this->keywords = "Калькулятор повторений";
        $this->description = "Калькулятор повторений поможет вам узнать с каким весом вы способны выполнить одно повторение в жиме,приседаниях и становой тяге.";
        $this->scripts[] = "rep_calculator";

    }


    protected function output(){

        $this->content = $this->render([

        ],'App/Views/blocks/rep_calculator_content');

        $this->page = parent::output();
    }

}