<div id = "bread_crumbs">
    <a href = "http://<?=SITE_NAME;?>/index">главная /</a><span> <?=$bread_crumbs;?> </span>
</div>

<main>

        <?if($articles):?>
    <? for($i = 0;$i < count($articles);$i++):?>
     <article class="content_block">
         <h1><?=$articles[$i]['title'];?></h1>
         <p class  = "publication_date">
             Дата публикации : <?=date('d/m/Y',$articles[$i]['publication_date']);?>
         </p>
         <img class="article_image" src="/images/article_images/<?=$articles[$i]['image'];?>" alt = "article image">
         <p class = "small_article">
             <?=$articles[$i]['small_article'];?>
         </p>
         <div class = "views_likes">
             <input type="hidden" class = "article_id" value="<?=$articles[$i]['id'];?>">
              <img src="/images/count_likes.png" alt = "likes" class = "likes_img">  <span class="count_likes"><?=$articles[$i]['count_likes'];?></span>
             <img src="/images/count_views.png" alt = "views">  <span><?=$articles[$i]['quantity_views'];?></span>
         </div>

         <a href = "http://<?=SITE_NAME;?>/article/id/<?=$articles[$i]['id'];?>" class = "read_more button"> читать далее... </a>
         <div class = "clear"></div>
     </article>
    <? endfor; ?>


            <?if($navigation):?>

                <div id  = "navigation">
                    <table>
                        <tr>

                            <?if($navigation['arrow_back']):?>
                                <td> <a href="http://<?=SITE_NAME;?>/<?=$href;?>/page/<?=$navigation['arrow_back'];?>" id = "arrow_left">  </a> </td>
                            <?endif;?>

                            <? if($navigation['previous']):?>
                                <? foreach($navigation['previous'] as $val):?>
                                    <td><a href="http://<?=SITE_NAME;?>/<?=$href;?>/page/<?=$val;?>"><?=$val;?></a></td>
                                <? endforeach;?>
                            <? endif;?>

                            <? if($navigation['current']):?>
                                <td> <span class = "current_page"> <?=$navigation['current'];?> </span> </td>
                            <? endif;?>

                            <? if($navigation['next']):?>
                                <? foreach($navigation['next'] as $val):?>
                                    <td><a href="http://<?=SITE_NAME;?>/<?=$href;?>/page/<?=$val;?>"><?=$val;?></a></td>
                                <? endforeach;?>
                            <? endif;?>

                            <? if($navigation['arrow_forward']):?>
                                <td>
                                    <a href = "http://<?=SITE_NAME;?>/<?=$href;?>/page/<?=$navigation['arrow_forward'];?>" id = "arrow_right"></a>
                                </td>
                            <? endif;?>

                        </tr>

                    </table>
                </div>

            <?endif;?>

    <?else:?>
    <article class="content_block">
      <p> По данному адресу статей нет!!! </p>
    </article>
    <?endif;?>




</main>