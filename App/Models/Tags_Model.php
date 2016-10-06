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

    public function delete_tag($tag_id){
        self::$db->pdo_delete('tags',['id' => $tag_id]);
        self::$db->pdo_delete('articles_tags',['tag_id' => $tag_id]);
    }

    public function change_tags($new_names,$hrefs){
        $i = 0;
        foreach($this->get_all_tags() as $key => $val){
            self::$db->pdo_update('tags',['title'],[$new_names[$i]],['id' => $val['id']]);
            self::$db->pdo_update('tags',['href'],[$hrefs[$i]],['id' => $val['id']]);
            $i++;
        }
    }

}