<?php

namespace App\Controllers;

use App\Models\Subscribe_Model;

class Activate_Controller extends Base_Controller
{

    protected $code;
    protected $activate_message;
    protected $activate_table;

    protected function input($params = [])
    {
        parent::input();

        $this->code = $params['code'];

           $this->activate_subscriber();


    }

    protected function output()
    {
        $this->content = $this->render(['message' => $this->activate_message], 'App/Views/blocks/activate_content');

        $this->page = parent::output();
    }


    protected function activate_subscriber(){
        $this->title = 'Активация подписки | Barbellfans';
        $this->keywords = 'активация нового подписчика';
        $this->description = 'активация нового подписчика';


        if (!Subscribe_Model::instance()->activate_subscriber($this->code,'subscribers')) {
            $this->activate_message = 'произошла какято ошибочка';
        }
        else {
            $this->activate_message = " Вы активировали подписку на новости на сайте - ".SITE_NAME;
        }
    }



}