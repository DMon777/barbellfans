<?php

namespace App\Controllers;


use App\Models\User_Model;


abstract class Main_Controller
{

    protected $params;
    protected $controller;
    protected $page;
    protected $close = false;

    protected function input($params = []){
        if(isset($_SESSION['auth']['error_message'])){
            unset($_SESSION['auth']['error_message']);
        }

        if($_POST['enter']){
            $this->auth_user($_POST['auth_login'],$_POST['auth_password']);
        }

        $this->close_page();
    }

    protected function output(){
        //будет определана в классах наследниках
    }

    protected function request($params = []){
        $this->input($params);
        $this->output();
        $this->show_page();
    }

    public function route(){
        if(class_exists($this->controller)){
            $controller = new $this->controller();
            $controller->request($this->params);
        }
        else{
            throw new Controller_Exception();
        }
    }

    protected function render($vars = [],$path){
        if(count($vars) > 0){
            extract($vars);
        }
        ob_start();

        if(!require $path.'.php'){
            throw new Controller_Exception();
        }

        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    protected function show_page(){
        echo $this->page;
    }

    protected function clean_str($str){
        return htmlspecialchars(trim($str));
    }

    protected function redirect($path = false){
        if($path){
            $redirect = $path;
        }
        else{
            $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : SITE_NAME;
        }
        header("Location: $redirect");
    }

    protected function translate_russian_words($str){
        $rus = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'];
        $lat = ['A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya'];
        return str_replace($rus, $lat, $str);
    }

    protected function close_page(){
        if($this->close){
            if(!isset($_SESSION['auth']['user'])){
                $this->redirect('http://'.SITE_NAME.'/index');
                return false;
            }
            $user =  User_Model::instance()->get_user($_SESSION['auth']['user']);
            if($user['role'] != "Administrator"){
                $this->redirect('http://'.SITE_NAME.'/index');
                return false;
            }
        }
        return true;
    }

    protected function auth_user($login,$password){

        if(strlen($login) < 1  || strlen($password) < 1){
            $_SESSION['auth']['error_message'] = "Вы ввели не все данные,будте повнимательнее!";
            return false;
        }

        if(User_Model::instance()->auth_user($login,$password)){
            unset($_SESSION['auth']['error_message']);
            $_SESSION['auth']['user'] = $login;
            return true;
        }

        else{
            $_SESSION['auth']['error_message'] = "Логин и/или пароль введены неверно!";
            return false;
        }

    }

    protected function print_array($array){//отладочная функция потом удалю ;)
        echo "<pre>";
            print_r($array);
        echo "</pre>";
    }


}