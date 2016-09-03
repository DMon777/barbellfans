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
            <li> <h3>Тренировки</h3>
                <ul>
                    <li><h4>Набор массы</h4>

                        <ul>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                        </ul>
                    </li>

                    <li><h4>Системы тренировок</h4>

                        <ul>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                        </ul>

                    </li>
                    <li><h4>Натуральный тренинг</h4>

                        <ul>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li> <h3>Питание</h3>

                <ul>
                    <li><h4>Набор массы</h4>

                        <ul>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                        </ul>

                    </li>

                    <li><h4>Диета</h4>

                        <ul>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                        </ul>

                    </li>
                    <li><h4>Добавки</h4>

                        <ul>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                            <li><a href=""> Название статьи </a> </li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>


        <div class = "clear"></div>

    </article>

</main>