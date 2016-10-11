<?php

namespace App\Controllers;

use App\classes\Mail;
use App\Models\User_Model;


class Feedback_Controller extends Base_Controller
{

    protected $message;
    protected $feedback_message;
    protected $email;
    protected $rand_number;
    protected $subject = "feedback";


    protected function input($params = []){
        parent::input();

        $this->title = "Обратная связь | Barbellfans";


        if($_SESSION['auth']['user']){
            $this->email = User_Model::instance()->get_user($_SESSION['auth']['user'])['email'];
        }
        else{
            $this->email = $_POST['email'];
        }

        $this->message = $_POST['feedback_message'];
        $this->rand_number = rand(1,10);

        if($this->message && $this->email){
           if(Mail::send_mail(ADMIN_EMAIL,$this->subject,$this->message,$this->email)){
               $this->feedback_message = "Сообщение отправлено!";
           }
           else{
               $this->feedback_message = "Произошла ошибка , попробуйте попозже!";
           }
        }
    }

    protected function output(){

        $this->content = $this->render(
        [
            "message" => $this->feedback_message,
            "rand_number" => $this->rand_number
        ],
            'App/Views/blocks/feedback_content');
        $this->page = parent::output();
    }

}