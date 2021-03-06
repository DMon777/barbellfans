<?php

namespace App\Models;


class User_Model extends Abstract_Model
{

    protected static $instance;

    public static function instance(){
        if(self::$instance instanceof self) {
            return self::$instance;
        }
        return self::$instance = new self;
    }

    public function reg_user($login,$password,$email){
        $password = password_hash($password,PASSWORD_DEFAULT);
        return self::$db->pdo_insert('users',['login','password','email'],
                               [$login,$password,$email] );
    }


    public function check_busy_login($login){
        if(isset($_SESSION['auth']['user'])){
            $user = $this->get_user($_SESSION['auth']['user']);
            if($user){
                if($user['login'] == $login){
                    return false;
                }
            }
        }

        $sql = "SELECT login FROM users WHERE login='$login'";
        $result = self::$db->prepared_select($sql);
        if($result){
            return true;
        }
        return false;
    }

    public function check_busy_email($email){
        if(isset($_SESSION['auth']['user'])){
            $user = $this->get_user($_SESSION['auth']['user']);
            if($user){
                if($user['mail'] == $email){
                    return false;
                }
            }
        }

        $sql = "SELECT email FROM users WHERE email='$email'";
        $result = self::$db->prepared_select($sql);
        if($result){
            return true;
        }
        return false;
    }

    public function auth_user($login,$password){

        $sql = "SELECT login,password FROM users WHERE login='$login'";
        $result = self::$db->prepared_select($sql)[0];

        if($result && password_verify($password,$result['password'])){
            $_SESSION['auth']['user'] = $login;
            return true;
        }
        else{
            return false;
        }
    }

    public function is_auth(){
        if(isset($_SESSION['auth']['user'])){
            return true;
        }
        return false;
    }

    public function get_user_by_id($user_id){
        $sql = "SELECT login,avatar FROM users WHERE id=".$user_id." AND activate=1";
        return self::$db->prepared_select($sql)[0];
    }

    public function get_user($login){
        $sql = "SELECT id,login,email,avatar,role FROM users WHERE login='$login'";
        return self::$db->prepared_select($sql)[0];
    }

    public function change_avatar($user_login,$new_avatar_name){
         self::$db->pdo_update('users',['avatar'],[$new_avatar_name],['login' => $user_login]);
        Comments_Model::instance()->change_avatar($new_avatar_name,$user_login);
    }

    public function edit_login($login,$user_id){

        if( self::$db->pdo_update('users',['login'],[$login],['id' => $user_id]) &&
            Comments_Model::instance()->update_login($login,$user_id)
        ){
            $_SESSION['auth']['user'] = $login;
        }

    }

    public function get_login_by_email($email){
        $sql = "SELECT login FROM users WHERE email='$email'";
        return self::$db->prepared_select($sql)[0];
    }

    public function update_password($login,$password){
        $password = password_hash($password,PASSWORD_DEFAULT);
        return self::$db->pdo_update('users',['password'],[$password],['login' => $login]);
    }


}