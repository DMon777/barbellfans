<?php

namespace App\Controllers;

use App\Models\Articles_Model;
use App\Models\Comments_Model;
use App\Models\Menu_Model;
use App\Models\User_Model;
use App\classes\Mail;

class Article_Controller extends Base_Controller
{

    protected $article;
    protected $article_id;
    protected $user;
    protected $user_id;
    protected $text_comment;
    protected $parent_id;
    protected $comments;
    protected $comments_map;
    protected $bread_crumbs;
    protected $message;
    protected $user_login;
    protected $email;
    protected $commentator_email;
    protected $avatar;

    protected function input($params = []){
        parent::input();

        $this->article_id  = $params['id'];
        $this->article     = Articles_Model::instance()->get_article($this->article_id);
        $this->title       = $this->article['title'];
        $this->keywords    = $this->article['keywords'];
        $this->description = $this->article['description'];
        $this->bread_crumbs = Menu_Model::instance()->get_bread_crumbs($this->article['category']);

        Articles_Model::instance()->add_views($this->article_id,$this->article['quantity_views']);


       if(isset($_SESSION['auth']['user'])){
            $this->user = User_Model::instance()->get_user($_SESSION['auth']['user']);
        }
        $this->send_comment();

        $this->comments_map = Comments_Model::instance()->make_comments_tree($this->article_id);

        ob_start();
        Comments_Model::instance()->print_comments_map($this->comments_map);
        $this->comments = ob_get_contents();
        ob_end_clean();

    }

    protected function output(){

        $this->content = $this->render([
            'article'      => $this->article,
            'comments'     => $this->comments,
            'user'         => $this->user,
            'bread_crumbs' => $this->bread_crumbs
        ],
            'App/Views/blocks/article_content');

        $this->page = parent::output();
    }


    protected function send_comment(){
        $this->parent_id    = $_POST['parent_id'] ?? 0;
        $this->text_comment = $this->clean_str($_POST['text_comment']);

        if(strlen($this->text_comment) < 1){
            return false;
        }

        if($this->user){
            $this->user_login = $this->user['login'];
            $this->email      = $this->user['email'];
            $this->avatar     = $this->user['avatar'];
            $this->user_id    = $this->user['id'];

        }
        else{
            $this->user_login = "Гость";
            $this->email      = $this->clean_str($_POST['email']);
            $this->avatar     = 'default_avatar.jpg';
            $this->user_id    = 0;
        }

        Comments_Model::instance()->insert_comment($this->parent_id,$this->article_id,
            $this->text_comment,$this->user_login,$this->user_id,$this->email,$this->avatar);

        if($this->parent_id != 0){
            $this->commentator_email = Comments_Model::instance()->get_commentator_email($this->parent_id);

            $subject       = "comments";
            $email_message = "На ваш комментарий ответили для просмотра перейдите по ссылке - http://".SITE_NAME."/article/id/".$this->article_id;
            $from          = ADMIN_EMAIL;

            Mail::send_mail($this->commentator_email,$subject,$email_message,$from);
        }

    }



}