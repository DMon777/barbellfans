<div id = "bread_crumbs">
    <a href = "http://<?=SITE_NAME;?>/index">главная /</a>
    <?if($bread_crumbs):?>
    <a href = "http://<?=SITE_NAME;?>/<?=$bread_crumbs['href'];?>">  <?=$bread_crumbs['title'];?> /</a>
    <span><?=$article['header'];?></span>
    <?endif;?>
</div>

<main>

    <article class="content_block">
        <?if(count($article) > 1 ):?>
        <h1><?=$article['header'];?></h1>
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
            <input type="hidden" class = "article_id" value="<?=$article['id'];?>">
            <img src="/images/count_likes.png" alt = "likes" class = "likes_img">  <span class = "count_likes"><?=$article['count_likes'];?></span>
            <img src="/images/count_views.png" alt = "views">  <span><?=$article['quantity_views'];?></span>
        </div>


        <div id="share">
            <img src="/images/share_icon.png" alt="share" id="share_icon">
            <a href = "http://vkontakte.ru/share.php?url=http://<?=SITE_NAME;?> rel="nofollow" target="_blank"> <img src="/images/vk_share.png" alt="vk"></a>
            <a href = "http://www.facebook.com/sharer.php?u=http://<?=SITE_NAME;?>/" rel="nofollow" target="_blank"> <img src="/images/facebook_share.png" alt="facebook"></a>
            <a href = "http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=http://<?=SITE_NAME;?>  rel="nofollow" target="_blank"> <img src="/images/odnoklassniki_share.png" alt="odnoklassniki"></a>
            <a href = "https://plusone.google.com/_/+1/confirm?hl=ru&url=<?=SITE_NAME;?>" target="_blank"> <img src="/images/google_share.png" alt="google+"></a>
        </div>

        <?else:?>
            <p>Извини , качок , но такой статьи нет!</p>
        <?endif;?>

        <div class = "clear"></div>

    </article>

    <div id = "comments_block" class="content_block">
        <h1>Комментарии</h1>

        <?if($_SESSION['auth']['user']):?>
            <div class="comment_form">
                <form method="post" action = "">
                    <textarea placeholder="Комментарий..." name="text_comment"></textarea><br>
                    <input type="button" value = "опубликовать" name="send_comment" class="button">
                </form>
                <p class="comment_error_message"></p>
            </div>

        <?else:?>
            <p> Ваш e-mail не будет опубликован. </p>
            <div class="comment_form">
                <form method="post" action = "">
                    <textarea placeholder="Комментарий..." name="text_comment"></textarea><br>
                    <input type="text" name = "email" placeholder = "e-mail"><br>
                    <input type="button" value = "опубликовать" name="send_comment" class="button">
                </form>
                <p class="comment_error_message"></p>
            </div>
        <?endif;?>

        <div id = "comments">

            <? if($comments):?>

                <?=$comments; ?>
            <?else:?>
                <p> Комментариев пока нет </p>
            <?endif;?>

        </div>
    </div>

</main>