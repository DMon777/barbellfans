<?php

namespace App\Controllers;


use App\Models\Menu_Model;
use App\Models\Subscribe_Model;
use App\Models\User_Model;
use App\classes\Mail;

class Subscribe_Controller extends Base_Controller
{

    protected $categories;
    protected $subscribe_categories;
    protected $subscriber_name;
    protected $email;
    protected $message;
    protected $user;
    protected $is_subscribed;
    protected $user_id;
    protected $rand_code;
    protected $subject = "активация подписки";
    protected $email_message;

    protected function input($params = []){
        parent::input();

        $this->title = "Подписка на обновления | Barbellfans";
        $this->categories = Menu_Model::instance()->get_categories();

        if($_SESSION['auth']['user']){
            $this->user = User_Model::instance()->get_user($_SESSION['auth']['user']);

            if(Subscribe_Model::instance()->is_subscribed($this->user['login'],$this->user['email'])){
                $this->is_subscribed = true;
            }
            else{
                $this->is_subscribed = false;
            }
        }
        if($_POST['category']){
            $this->add_subscriber();
        }
    }

    protected function output(){

        $this->content = $this->render([
            'categories' => $this->categories,
            'message'    => $this->message,
            'is_subscribed' => $this->is_subscribed

        ],'App/Views/blocks/subscribe_content');

        $this->page = parent::output();
    }

    protected function add_subscriber(){

        if(isset($_SESSION['auth']['user'])){
            $this->subscriber_name = $this->user['login'];
            $this->email = $this->user['email'];
            $this->user_id = $this->user['id'];
        }
        else{
            $this->subscriber_name = $this->clean_str( $_POST['name']);
            $this->email = $this->clean_str( $_POST['email']);
            $this->user_id = 0;
        }

        $this->subscribe_categories = $_POST['category'];

        $this->rand_code = rand(100000,999999);

        if(Subscribe_Model::instance()->add_subscriber($this->user_id,$this->subscriber_name,$this->email,$this->subscribe_categories,$this->rand_code)){

            $this->email_message = "Вы подали заявку на рассылку новостей на сайте - ".SITE_NAME." ,для активации
                                перейдите по ссылке  -  http://".SITE_NAME."/activate/item/subscriber/code/".$this->rand_code.".Если вы не подписывались на
                                новости просто проигнорируйте данное письмо.";
            Mail::send_mail($this->email,$this->subject,$this->email_message,ADMIN_EMAIL);
            $this->message = $this->subscriber_name.", на ваш email было отправлено письмо с сылкой для активации подписки, проверьте ваш почтовый ящик.";
            return true;
        }
        else{
            $this->message = "произошла какая-то ошибочка , попробуйте попозже!";
        }

    }



}