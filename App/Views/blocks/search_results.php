<div id = "bread_crumbs">
    <a href = "http://<?=SITE_NAME;?>/index">главная / </a><span>результаты поиска</span>
</div>

<main>

    <article class="content_block">
        <p class  = "publication_date">
            Колличество найденных статей по вашему запросу - <?=count($search_result);?>
        </p>

        <?if($search_result):?>

        <?foreach($search_result as $key => $val):?>
            <h1><?=$val['title'];?></h1>

            <p><?=$val['small_article'];?></p>

            <a href = "http://<?=SITE_NAME;?>/article/id/<?=$val['id']?>" class = "read_more button"> читать далее... </a>
            <div class="clear"></div>

        <?endforeach;?>

      <?else:?>

       <p>По вашему запросу ничего не найдено!Попробуйте поискать в Google , там все найдеться.</p>

      <?endif;?>

    </article>

</main>