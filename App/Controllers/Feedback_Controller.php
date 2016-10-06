<?php

namespace App\Controllers;

use App\classes\Mail;


class Feedback_Controller extends Base_Controller
{

    protected $message;
    protected $feedback_message;
    protected $email;
    protected $subject = "feedback";
    protected $admin_email = "d.mon110kg@gmail.com";


    protected function input($params = []){
        parent::input();

        $this->title .= "Обратная связь";

        $this->email = $_POST['email'];
        $this->message = $_POST['feedback_message'];

        if($this->message && $this->email){
           if(Mail::send_mail($this->admin_email,$this->subject,$this->message,$this->email)){
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
            "message" => $this->feedback_message
        ],
            'App/Views/blocks/feedback_content');
        $this->page = parent::output();
    }



}