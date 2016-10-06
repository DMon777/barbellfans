<?php

namespace App\Controllers;


use App\Models\Articles_Model;
use App\Models\Tags_Model;
use App\Models\Menu_Model;
use App\Models\Comments_Model;
use App\Models\Likes_Model;

class Delete_Controller extends Base_Controller
{

    protected function input($params = []){
        parent::input();

        switch($params['item']){
            case 'comment':
                Comments_Model::instance()->delete_comment($params['id']);
                break;
            case 'article':
                Articles_Model::instance()->delete_article($params['id']);
                break;
            case 'tag':
                Tags_Model::instance()->delete_tag($params['id']);
                break;
            case'category':
                Menu_Model::instance()->delete_category($params['id']);
                break;
            case'bookmark':
                Likes_Model::instance()->delete_like($_SESSION['auth']['user'],$params['id']);
                $this->redirect();
                break;
        }

    }

}