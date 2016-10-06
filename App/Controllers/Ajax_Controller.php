<?php
namespace App\Controllers;

use App\Models\Likes_Model;
use App\Models\User_Model;
class Ajax_Controller extends Base_Controller
{

    protected $rand_code;

    protected function input($params = []){
        parent::input();

        switch($params['method']){
            case 'validate_login':
                $this->validate_login($_POST['login']);
                break;

            case 'validate_email':
                $this->validate_email($_POST['email']);
                break;

            case 'upload_avatar':
                $this->upload_avatar();
                break;
            case 'add_like':
                $this->add_like($_POST['article_id']);
                break;
        }
    }

    protected function validate_login($login){
        if(empty($login)){
            echo "заполните поле!!!";
            return false;
        }
        if(strlen($login) < 3){
            echo "Логин должен состоять из 3-х символов и более!";
            return false;
        }

        $pattern = "/^[a-zA-Z0-9_-]/";
        if(!preg_match($pattern,$login)){
            echo "Логин должен начинаться на латинские буквы дефисы и знаки подчеркивания!";
            return false;
        }

        $pattern2 = "/(^[^а-яА-Я ])+([^а-яА-Я ])+[^а-яА-Я ]$/";
        if(!preg_match($pattern2,$login)){
            echo "Нельзя использовать русские буквы и пробелы!";
            return false;
        }

        if(User_Model::instance()->check_busy_login($login)){
            echo "Этот логин уже занят";
        }
        return true;
    }

    public function validate_email($email){
        if(empty($email)){
            echo "заполните поле!!!";
            return false;
        }
        $pattern = "/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/";
        if(!preg_match($pattern,$email)){
            echo " не правильный формат ввода email";
            return false;
        }
        if(User_Model::instance()->check_busy_email($email)){
            echo "этот почтовый ящик уже зарегестрирован!!!";
            return false;
        }
    }


    public function upload_avatar(){

        $this->rand_code = rand(100000,999999);


        $types = ["image/gif","image/png","image/jpeg","image/pjpeg","image/x-png"];
        $size = 2097152;

        $pattern = '/[А-Яа-я]/';
        if(($_FILES['avatar']['name'])) {

            if (preg_match($pattern, $_FILES['avatar']['name'])) {
                $_FILES['avatar']['name'] = $this->translate_russian_words($_FILES['avatar']['name']);
            }
            $file = $this->rand_code.$_FILES['avatar']['name'];
        }

        $result = [];
        if(!isset($file)){
            $result = ["answer" => "ошибка загрузки файла!!!"];
            exit(json_encode($result));
        }
        if($_FILES['avatar']['size'] > $size ){
            $result = ["answer" => "ошибка загрузки файла,файл слишком большой!!!"];
            exit(json_encode($result));
        }
        if(!in_array($_FILES['avatar']['type'],$types)){
            $result = ["answer" => "ошибка загрузки файла,не допустимое расширение файлов!!!"];
            exit(json_encode($result));
        }

        $upload_dir = "images/avatars/".$file;

        if(move_uploaded_file($_FILES['avatar']['tmp_name'],$upload_dir)){

            $user = User_Model::instance()->get_user($_SESSION['auth']['user']);

            if(file_exists('images/avatars/'.$user['avatar']) && $user['avatar'] != 'default_avatar.jpg' ){
                unlink('images/avatars/'.$user['avatar']);
            }
            User_Model::instance()->change_avatar($user['login'],$file);

            $result = ["answer" => "","file" => $file];
            exit(json_encode($result));
        }

    }

    public function add_like($id){
        if(User_Model::instance()->is_auth()){
            Likes_Model::instance()->add_like($id);
            echo Likes_Model::instance()->count_likes($id);
        }
        else{
            echo "Извини,но нужно авторизоваться,иначе никак.";
        }
    }



}