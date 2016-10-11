<?php


namespace App\Models;


class Articles_Model extends Abstract_Model
{
    protected static $instance;

    public static function instance(){
        if(self::$instance instanceof self) {
            return self::$instance;
        }
        return self::$instance = new self;
    }


    public function get_articles_by_category_id($category_id){
        $sql = "SELECT id,title FROM articles WHERE category=".$category_id;
        return self::$db->prepared_select($sql);
    }

    public function get_search_results($search_string){
        $sql = "SELECT id,header,small_article,full_article FROM articles WHERE MATCH (header,full_article) AGAINST('$search_string')";
        return self::$db->prepared_select($sql);
    }

    public function get_article($article_id){
        $sql = "SELECT * FROM articles RIGHT JOIN likes ON articles.id=likes.article_id WHERE id=".$article_id;
        $result = self::$db->prepared_select($sql)[0];
        $result['tags'] = Tags_Model::instance()->get_tags($result['id']);
        return $result;
    }

    public function add_views($article_id,$quantity_views){
        $new_quantity_views = $quantity_views+1;
        return self::$db->pdo_update('articles',['quantity_views'],[$new_quantity_views],
                   ['id' => $article_id] );
    }

    public function get_all_articles(){
        $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 10";
        return self::$db->prepared_select($sql);
    }

    public function edit_article($title,$key_words,$description,$headline,
                                 $small_article,$full_article,$category,$image,$tags,$article_id){

     self::$db->pdo_update('articles',
                            ['title','keywords','description','header','small_article','full_article','category','image'],
                            [$title,$key_words,$description,$headline,$small_article,$full_article,$category,$image],
                            ['id' => $article_id] );

        $this->edit_tags($tags,$article_id);

    }

    protected function edit_tags($tags,$article_id){
        self::$db->pdo_delete('articles_tags',['article_id' => $article_id]);

        for($i = 0;$i <= count($tags);$i++){
            self::$db->pdo_insert('articles_tags',['article_id','tag_id'],[$article_id,$tags[$i]]);
        }

    }

    public function add_article($title,$key_words,$description,$headline,$small_article,
                                $full_article,$category,$image,$tags){

        self::$db->pdo_insert('articles',
                    ['title','keywords','description','header','category','small_article','full_article','publication_date','image'],
            [$title,$key_words,$description,$headline,$category,$small_article,$full_article,time(),$image]
            );

        $article_id = self::$db->last_id();
        Likes_Model::instance()->insert_like($article_id);

        for($i = 0;$i <= count($tags);$i++){
            self::$db->pdo_insert('articles_tags',['article_id','tag_id'],[$article_id,$tags[$i]]);
        }
    }

    public function get_last_article_category(){
        $sql = "SELECT category FROM articles ORDER BY id DESC LIMIT 1";
        return self::$db->prepared_select($sql)[0]['category'];
    }

    public function get_last_article_id(){
        $sql = "SELECT id FROM articles ORDER BY id DESC LIMIT 1";
        return self::$db->prepared_select($sql)[0]['id'];
    }

    public function delete_article($article_id){
        $article = $this->get_article($article_id);
        $image = 'images/article_images/'.$article['image'];

        if(file_exists($image)){
            unlink($image);
        }

        self::$db->pdo_delete('articles',['id' => $article_id]);
        self::$db->pdo_delete('articles_tags',['article_id' => $article_id]);
        Comments_Model::instance()->delete_comment_by_article_id($article_id);
        Likes_Model::instance()->delete_like_by_article_id($article_id);
    }

    public function add_new_tag($new_tag,$tag_href){
        return self::$db->pdo_insert('tags',['title','href'],[$new_tag,$tag_href]);
    }


    public function get_bookmarks($user_login){
        $sql = "SELECT article_id FROM likers WHERE user_login='$user_login'";
        $article_id = self::$db->prepared_select($sql);
        if($article_id){

            foreach($article_id as $key => $val){
                $query = "SELECT * FROM articles WHERE id=".$val['article_id'];
                $bookmarks[] = self::$db->prepared_select($query);
            }
            return $bookmarks;
        }
        else{
            return false;
        }
    }

}