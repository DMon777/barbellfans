<?php

namespace App\Models;


class Comments_Model extends Abstract_Model
{

    protected static $instance;

    public static function instance(){
        if(self::$instance instanceof self) {
            return self::$instance;
        }
        return self::$instance = new self;
    }

    public function insert_comment($parent_id,$article_id,$text_comment,$user_login,$user_id,$email,$avatar){
        return self::$db->pdo_insert('comments',['parent_id','article_id','text_comment','user_login','user_id','date','email','avatar'],
            [$parent_id,$article_id,$text_comment,$user_login,$user_id,time(),$email,$avatar]);
    }

    public function make_comments_tree($article_id,$start = 0){

        $sql = "SELECT * FROM comments WHERE article_id=".$article_id." AND parent_id=".$start;
        $comments = self::$db->prepared_select($sql);
        $map = [];

        if(!empty($comments)){
            foreach($comments as $comment)
            {
                $comment['children'] = $this->make_comments_tree($article_id,$comment['comment_id']);
                $map[] = $comment;
            }

        }
        return $map;
    }

    public function print_comments_map($map){

        if(!empty($map)){
            foreach($map as $val):?>


                <div class="comment">
                    <div class = "comment_avatar">
                    <img src="/images/avatars/<?=$val['avatar'];?>" class="user_avatar" alt = "avatar">
                        <?if($val['user_login'] != $_SESSION['auth']['user']):?>
                            <span class="answer">ответить</span>
                        <?endif;?>
                    </div>
                    <div class = "text_comment">
                        <span class = "user_login"> <?=$val['user_login'];?> </span> <span class="comment_date"> <?=date('d/m/Y',$val['date']);?></span>
                        <p>
                           <?=$val['text_comment'];?>
                        </p>

                    </div>

                    <div class="answer_form">
                        <form method="post" action = "">
                            <textarea name = "text_comment" placeholder="Комментарий..."></textarea><br>
                            <input type="hidden" name="parent_id" value="<?=$val['comment_id']?>">
                            <input type="hidden" name="user_login" value="<?=$val['user_login']?>">

                            <?if(!$_SESSION['auth']['user']):?>
                                <input type="text" name = "email" placeholder = "e-mail"><br>
                            <?endif;?>

                            <input type="button" value = "опубликовать" name="send_comment" class="button">
                        </form>
                        <p class="comment_error_message"></p>
                        <img src = "/images/close_icon2.png" alt = "close" class="close_icon">
                    </div>

                    <div class="clear"></div>
                    <? $this->print_comments_map($val['children']); ?>
                </div>

                <?php
            endforeach;
        }
        else{
            return false;
        }
    }

    public function print_admin_comments_map($map){
        if(!empty($map)){
            foreach($map as $val):?>
                <ul class="comments_list">
                    <li><?=$val['user_login'];?></li>
                        <li><?=$val['text_comment'];?></li>
                           <li>
                               <a href = "" onclick="delete_comment(<?=$val['comment_id'];?>)">
                                    delete
                               </a>
                           </li>
                    <hr>
                  <li> <? $this->print_admin_comments_map($val['children']); ?></li>
                </ul>
                <?php
            endforeach;
        }
        else{
            return false;
        }
    }


    public function delete_comment($comment_id){
        self::$db->pdo_delete('comments',['comment_id'=>$comment_id]);
        $sql = "SELECT comment_id FROM comments WHERE parent_id=".(int)$comment_id;
        $comment_child = self::$db->prepared_select($sql)[0];
        if($comment_child){
            $this->delete_comment($comment_child['comment_id']);
        }
    }

    public function delete_comment_by_article_id($article_id){
        self::$db->pdo_delete('comments',['article_id' => $article_id]);
    }

    public function change_avatar($new_avatar_name,$user_login){
        self::$db->pdo_update('comments',['avatar'],[$new_avatar_name],['user_login' => $user_login]);
    }

    public function get_user_by_comment_id($comment_id){//метод скорее всего не понадобиться
        $sql = "SELECT user_login FROM comments WHERE comment_id=".$comment_id;
        $result = self::$db->prepared_select($sql)[0];
        $user = User_Model::instance()->get_user($result['user_login']);
        return $user;
    }

    public function get_commentator_email($comment_id){
        $sql = "SELECT email FROM comments WHERE comment_id=".$comment_id;
        return self::$db->prepared_select($sql)[0]['email'];
    }

    public function update_login($login,$user_id){
       return self::$db->pdo_update('comments',['user_login',],[$login],['user_id' => $user_id]);
    }

}