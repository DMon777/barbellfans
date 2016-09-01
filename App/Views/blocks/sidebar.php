<aside>

    <div id="subscription" class="content_block">
        <h1> Подписаться на обновления </h1>
        <p>Подписавшись на обновления по email вы всегда первым будете узнавать о выходе новых статей на нашем сайте!</p>
        <img src="/images/subscribe_image.png" alt = "subscribe">
        <a href = "" class="button"> подписаться </a>

    </div>

    <div id="tags" class="content_block">
        <h1> Теги </h1>

        <?foreach($all_tags as $key => $val):?>
            <a href = "http://<?=SITE_NAME;?>/tags/title/<?=$val['href'];?>" class="button"> <?=$val['title'];?> </a>
        <?endforeach;?>

    </div>

</aside>

<div class="clear"></div>


</div>