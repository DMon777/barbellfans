<?php

namespace App\Controllers;


use App\Models\Articles_Model;
use App\Models\Subscribe_Model;
use App\Models\User_Model;
use App\Models\Menu_Model;

class Edit_Profile_Controller extends Base_Controller
{

    protected $user;
    protected $login;
    protected $message;
    protected $subscribe_categories;
    protected $categories;
    protected $bookmarks;

    protected function input($params = []){
        parent::input();

        $this->title = "Редактировать профиль | Barbellfans";
        $this->scripts[] = 'ajax_upload';
        $this->scripts[] = 'upload';
        $this->user = User_Model::instance()->get_user($_SESSION['auth']['user']);

        if($_POST['login']){
            $this->edit_login();
        }

        if($_POST['category']){
            Subscribe_Model::instance()->update_subscriber($this->user['id'],$_POST['category']);
        }

        $this->subscribe_categories = Subscribe_Model::instance()->get_subscribe_categories($this->user['id']);
        $this->categories = Menu_Model::instance()->get_categories();
        $this->bookmarks = Articles_Model::instance()->get_bookmarks($this->user['login']);

    }

    protected function output(){

        $this->content = $this->render(
            [
                'user'    => $this->user,
                'message' => $this->message,
                'subscribe_categories' => $this->subscribe_categories,
                'categories' => $this->categories,
                'bookmarks' => $this->bookmarks
            ],
            'App/Views/blocks/edit_profile_content');

        $this->page = parent::output();
    }

    protected function edit_login(){
        $this->login = $this->clean_str($_POST['login']);

        User_Model::instance()->edit_login($this->login,$this->user['id']);
        $this->user = User_Model::instance()->get_user($_SESSION['auth']['user']);
    }


}