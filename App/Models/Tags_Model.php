<?php


namespace App\Models;


class Tags_Model extends Abstract_Model
{

    protected static $instance;

    public static function instance(){
        if(self::$instance instanceof self) {
            return self::$instance;
        }
        return self::$instance = new self;
    }

    public function get_all_tags(){
        $sql = "SELECT * FROM tags";
        return self::$db->prepared_select($sql);
    }

    public function get_tag_title($href){
        $sql = "SELECT title FROM tags WHERE href='$href'";
        return self::$db->prepared_select($sql)[0]['title'];
    }

    public function get_tags($article_id){
        $sql  = "SELECT id,title,href from tags JOIN articles_tags ON articles_tags.tag_id = tags.id WHERE articles_tags.article_id =".$article_id;
        $result = self::$db->prepared_select($sql);
        return $result;
    }



}