<div id = "bread_crumbs">
    <a href = "http://<?=SITE_NAME;?>/index">главная /</a>
    <?if($bread_crumbs):?>
    <a href = "http://<?=SITE_NAME;?>/<?=$bread_crumbs['href'];?>">  <?=$bread_crumbs['title'];?> /</a>
    <span><?=$article['title'];?></span>
    <?endif;?>
</div>

<main>

    <article class="content_block">
        <?if(count($article) > 1 ):?>
        <h1><?=$article['title'];?></h1>
        <p class  = "publication_date">
            Дата публикации : <?=date('d/m/Y',$article['publication_date']);?>
        </p>
        <img class="full_article_image" src="/images/article_images/<?=$article['image'];?>" alt = "article image">
        <p>
            <?=$article['full_article'];?>

        </p>

        <div id = "article_tags">
            <p>Теги :
            <?for($i = 0;$i < count($article['tags']);$i++):?>
                <?if(count($article['tags']) - 1 > $i):?>
                    <a href="http://<?=SITE_NAME;?>/tags/title/<?=$article['tags'][$i]['href'];?>"> <?=$article['tags'][$i]['title'];?> </a>,
                    <?else:?>
                    <a href="http://<?=SITE_NAME;?>/tags/title/<?=$article['tags'][$i]['href'];?>"> <?=$article['tags'][$i]['title'];?> </a>
                 <?endif;?>
            <?endfor;?>
            </p>
        </div>

        <div class = "views_likes">
            <a href = ""> <img src="/images/count_likes.png" alt = "likes"> </a> <span><?=$article['count_likes'];?></span>
            <img src="/images/count_views.png" alt = "views">  <span><?=$article['quantity_views'];?></span>
        </div>



        <div id="share">
            <img src="/images/share_icon.png" alt="share" id="share_icon">
            <a href = ""> <img src="/images/vk_share.png" alt="vk"></a>
            <a href = ""> <img src="/images/facebook_share.png" alt="facebook"></a>
            <a href = ""> <img src="/images/odnoklassniki_share.png" alt="odnoklassniki"></a>
            <a href = ""> <img src="/images/google_share.png" alt="google+"></a>
        </div>

        <?else:?>
            <p>Извини , качок , но такой статьи нет!</p>
        <?endif;?>

        <div class = "clear"></div>

    </article>

    <div id = "comments_block" class="content_block">
        <h1>Комментарии</h1>
        <p> Ваш e-mail не будет опубликован. </p>
        <div class="comment_form">
            <form method="post" action = "">
                <textarea placeholder="Комментарий..."></textarea><br>
                <input type="text" name = "name" placeholder = "Имя"><br>
                <input type="text" name = "email" placeholder = "e-mail"><br>
                <input type="submit" value = "опубликовать" name="send_comment" class="button">
            </form>
            <p class="comment_error_message">сообщение об ошибке!!!</p>
        </div>

        <div id = "comments">
            <div class="comment">
                <img src="/images/avatars/default_avatar.jpg" class="user_avatar" alt = "avatar">
                <div class = "text_comment">
                    <span class = "user_login"> Login </span> <span class="comment_date"> 12/06/2016</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <span class="answer">ответить</span>
                </div>

                <div class="answer_form">
                    <form method="post" action = "">
                        <textarea placeholder="Комментарий..."></textarea><br>
                        <input type="text" name = "name" placeholder = "Имя"><br>
                        <input type="text" name = "email" placeholder = "e-mail"><br>
                        <input type="submit" value = "опубликовать" name="send_comment" class="button">
                    </form>
                    <p class="comment_error_message">сообщение об ошибке!!!</p>
                    <img src = "/images/close_icon2.png" alt = "close" class="close_icon">
                </div>

                <div class="clear"></div>

                <div class="comment">
                    <img src="/images/avatars/default_avatar.jpg" class="user_avatar" alt = "avatar">
                    <div class = "text_comment">
                        <span class = "user_login"> Login </span> <span class="comment_date"> 12/06/2016</span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <span class="answer">ответить</span>
                    </div>

                    <div class="answer_form">
                        <form method="post" action = "">
                            <textarea placeholder="Комментарий..."></textarea><br>
                            <input type="text" name = "name" placeholder = "Имя"><br>
                            <input type="text" name = "email" placeholder = "e-mail"><br>
                            <input type="submit" value = "опубликовать" name="send_comment" class="button">
                        </form>
                        <p class="comment_error_message">сообщение об ошибке!!!</p>
                        <img src = "/images/close_icon2.png" alt = "close" class="close_icon">
                    </div>

                    <div class="clear"></div>

                    <div class="comment">
                        <img src="/images/avatars/default_avatar.jpg" class="user_avatar" alt = "avatar">
                        <div class = "text_comment">
                            <span class = "user_login"> Login </span> <span class="comment_date"> 12/06/2016</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <span class="answer">ответить</span>
                        </div>

                        <div class="answer_form">
                            <form method="post" action = "">
                                <textarea placeholder="Комментарий..."></textarea><br>
                                <input type="text" name = "name" placeholder = "Имя"><br>
                                <input type="text" name = "email" placeholder = "e-mail"><br>
                                <input type="submit" value = "опубликовать" name="send_comment" class="button">
                            </form>
                            <p class="comment_error_message">сообщение об ошибке!!!</p>
                            <img src = "/images/close_icon2.png" alt = "close" class="close_icon">
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div class="comment">
                <img src="/images/avatars/default_avatar.jpg" class="user_avatar" alt = "avatar">
                <div class = "text_comment">
                    <span class = "user_login"> Login </span> <span class="comment_date"> 12/06/2016</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <span class="answer">ответить</span>
                </div>


                <div class="answer_form">
                    <form method="post" action = "">
                        <textarea placeholder="Комментарий..."></textarea><br>
                        <input type="text" name = "name" placeholder = "Имя"><br>
                        <input type="text" name = "email" placeholder = "e-mail"><br>
                        <input type="submit" value = "опубликовать" name="send_comment" class="button">
                    </form>
                    <p class="comment_error_message">сообщение об ошибке!!!</p>
                    <img src = "/images/close_icon2.png" alt = "close" class="close_icon">
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>

</main>