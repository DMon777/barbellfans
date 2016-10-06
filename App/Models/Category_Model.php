<?php

namespace App\Models;


class Category_Model extends Abstract_Model
{

    protected static $instance;

    public static function instance(){
        if(self::$instance instanceof self) {
            return self::$instance;
        }
        return self::$instance = new self;
    }

    public function add_subscriber($name,$email,$categories,$code){

        $sql = "SELECT email FROM subscribers WHERE email='$email'";
        $result = self::$db->prepared_select($sql);
        if($result){
            return false;
        }
        else{
            self::$db->pdo_insert('subscribers',['email','name','code'],[$email,$name,$code]);
            $subscriber_id = self::$db->last_id();
            for($i = 0;$i <= count($categories);$i++){
                self::$db->pdo_insert('categories_subscribe',['subscriber_id','category_id'],[$subscriber_id,$categories[$i]]);
            }
            return true;
        }
    }

    public function get_categories(){
        $sql = "SELECT * FROM categories";
        return self::$db->prepared_select($sql);
    }

    public function get_category_name($category_id){
        $sql = "SELECT title_in_menu FROM categories WHERE category_id=".$category_id;
        return self::$db->prepared_select($sql)[0]['title_in_menu'];
    }




    public function add_new_category($title,$href){//не нужна

        self::$db->pdo_insert('categories',['category_name','title_in_menu'],
            [$href,$title]);
        Menu_Model::instance()->add_category($title,$href);

    }

    public function delete_category($id){

        $sql = "SELECT title FROM menu WHERE `id`=".$id;
        $category_title = self::$db->prepared_select($sql)[0]['title'];
        $sql2 = "SELECT category_id WHERE title_in_menu ='$category_title'";
        $category_id = self::$db->prepared_select($sql2)[0]['category_id'];
        if($category_id){
            self::$db->pdo_delete('categories_subscribe',['category_id' => $category_id]);
        }

        self::$db->pdo_delete('categories',['category_id' => $category_id]);
        Menu_Model::instance()->delete_category($id);

    }


}