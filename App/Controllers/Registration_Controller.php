<?php
namespace App\Controllers;


use App\Models\User_Model;


class Registration_Controller extends Base_Controller
{

    protected $login;
    protected $password;
    protected $confirm_password;
    protected $email;
    protected $rand_number;
    protected $registration_message;

    protected function input($params = []){
        parent::input();

        $this->title      .= "Регистрация";
        $this->scripts[]   = 'registration';
        $this->rand_number = rand(1,10);

        if($_POST['registration']){
            $this->registration();
        }
    }

    protected function output(){

        $this->content = $this->render([
            'message'     => $this->registration_message,
            'rand_number' => $this->rand_number
        ],
            'App/Views/blocks/registration_content');

        $this->page = parent::output();
    }

    protected function registration(){
        $this->login      = $this->clean_str($_POST['login']);
        $this->password   = $this->clean_str($_POST['password']);
        $this->email      = $this->clean_str($_POST['email']);

        if(User_Model::instance()->reg_user($this->login,$this->password,$this->email)){
            $this->registration_message = " Привет , ".$this->login."!!! Теперь ты пользователь сайта ".SITE_NAME. "
            Теперь ты можешь заходить на сайт под своим логином.";
            return true;
        }
        else{
            $this->registration_message = "При регистрации что-то пошло не так , попробуйте еще раз.";
            return false;
        }
    }

}