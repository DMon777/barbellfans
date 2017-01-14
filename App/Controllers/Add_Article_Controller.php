<?php

namespace App\Controllers;


use App\classes\Mail;
use App\Models\Articles_Model;
use App\Models\Menu_Model;
use App\Models\Subscribe_Model;
use App\Models\Tags_Model;

class Add_Article_Controller extends Base_Admin_Controller
{

    protected $image;
    protected $key_words;
    protected $description;
    protected $headline;
    protected $small_article_text;
    protected $full_article_text;
    protected $article_category;
    protected $article_tags;
    protected $tags;
    protected $categories;
    protected $rand_code;
    protected $article_title;

    protected function input($params = []){
        parent::input();

        $this->title = "добавление статьи";
        $this->scripts = ['jQuery','bootstrap.min','ckeditor/ckeditor','AjexFileManager/ajex','ckeditor_inclusion'];
        $this->tags = Tags_Model::instance()->get_all_tags();
        $this->categories = Menu_Model::instance()->get_categories();

        if($_POST['add_article']){
            if($this->add_article()){
                $this->send_mail_to_subscribers();
            }
        }
    }

    protected function output(){

        $this->content = $this->render([
            'tags' => $this->tags,
            'categories' => $this->categories
        ],'App/Views/blocks/admin_blocks/add_article');

        $this->page = parent::output();
    }

    protected function add_image(){
        $this->rand_code = rand(100000,999999);

        $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
        foreach ($blacklist as $item){
            if(preg_match("/$item\$/i", $_FILES['article_image']['name'])) exit;
        }
        $pattern = '/[А-Яа-я]/';
        if(!empty($_FILES['article_image']['name'])){

            if(preg_match($pattern,$_FILES['article_image']['name'])){
                $this->image = $this->rand_code.$this->translate_russian_words($_FILES['article_image']['name']);
            }
            else $this->image = $this->rand_code.$_FILES['article_image']['name'];
            $dir_to_upload_avatar   = "images/article_images/".$this->image;
            move_uploaded_file($_FILES['article_image']['tmp_name'],$dir_to_upload_avatar);
        }
    }

    protected function add_article(){

        $this->key_words  = $_POST['keywords'];
        $this->description  = $_POST['description'];
        $this->article_title  = $_POST['title'];
        $this->headline  = $_POST['headline'];
        $this->small_article_text  = $_POST['small_article'];
        $this->full_article_text  = $_POST['full_article'];
        $this->article_category = $_POST['category'];
        $this->article_tags = $_POST['tags'];

        $this->add_image();

        Articles_Model::instance()->add_article
        (
            $this->article_title,$this->key_words,$this->description,$this->headline,
            $this->small_article_text,$this->full_article_text,
            $this->article_category,$this->image,$this->article_tags
        );
        return true;
    }

    protected function send_mail_to_subscribers(){

        $emails = Subscribe_Model::instance()->get_subscribers_emails();


        $article_id = Articles_Model::instance()->get_last_article_id();
        $subject = "Рассылка";
//        $message = "На нашем сайте вышла новая статья -".$this->headline.".
//        перейдите по ссылке - http://".SITE_NAME."/article/id/".$article_id;



        for($i = 0;$i < count($emails);$i++){

            $message = $this->render([
                'headline' => $this->headline,
                'article_id' => $article_id,
                'subscriber_email' => $emails[$i]
            ],'App/Views/blocks/email_body');

          //  $message = "hello ".$emails[$i];



            Mail::send_mail($emails[$i],$subject,$message,ADMIN_EMAIL);
            sleep(1);
        }
    }


}