<div id = "bread_crumbs">
    <a href = "http://<?=SITE_NAME;?>/index">главная /</a>  <span>карта сайта</span>
</div>

<main>
    <article class="content_block" id="sitemap_content">
        <h1>Карта сайта</h1>

        <h2>Меню</h2>
        <ul>
            <? foreach($menu as $key => $val):  ?>
                <?if(count($val['children'] ) > 0):?>
                    <li><span><?=$val['title'];?></span>
                        <ul>
                            <?foreach($val['children'] as $k => $v): ?>
                                <li> <a href="http://<?=SITE_NAME;?>/<?=$v['href']?>"> <?=$v['title'];?> </a> </li>
                            <?endforeach;?>
                        </ul>
                    </li>
                <?else:?>
                    <li><a href = "http://<?=SITE_NAME;?>/<?=$val['href']?>"><?=$val['title'];?></a></li>
                <?endif;?>
            <?endforeach;?>
        </ul>

        <h2>Статьи</h2>

        <ul>
            <?foreach($categories_tree as $key => $val):?>
                <?if(!empty($val['children'])): ?>
                    <li>
                        <h3> <?=$val['title']?> </h3>

                        <?foreach($val['children'] as $k => $v): ?>
                            <ul>
                                <li>
                                  <h4>
                                      <a href="http://<?=SITE_NAME;?>/<?=$v['href']?>"> <?=$v['title']?> </a>
                                  </h4>
                                    <?if($v['articles']):?>
                                        <?foreach($v['articles'] as $num => $item):?>
                                            <ul>
                                                <li>
                                                    <a href="http://<?=SITE_NAME;?>/article/id/<?=$item['id']?>"> <?=$item['title'];?> </a>
                                                </li>
                                            </ul>
                                         <?endforeach;?>
                                    <?endif;?>
                                </li>
                            </ul>
                        <?endforeach;?>
                    </li>

                    <?else:?>
                    <li>
                        <h3>
                            <a href = "http://<?=SITE_NAME;?>/<?=$val['href'];?>"><?=$val['title']?></a>
                        </h3>
                    </li>
                <?endif;?>
            <?endforeach;?>
        </ul>

        <div class = "clear"></div>

    </article>

</main>