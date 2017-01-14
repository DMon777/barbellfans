<?php

namespace App\Models;


class Admin_Navigation extends Navigation
{
    protected  $posts_by_one_page = 3;

    public function __construct($current_page){
        self::$db = Database_Model::instance();
        $this->current_page = $current_page;
    }

    public function get_articles(){
        $shift = $this->posts_by_one_page*($this->current_page - 1);
        $sql = "SELECT id,title FROM articles ORDER BY id DESC LIMIT $shift,$this->posts_by_one_page";
        $result = self::$db->prepared_select($sql);
        return $result;
    }

}