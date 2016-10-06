<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="http://<?=SITE_NAME;?>/styles/admin_styles.css" type = "text/css">
    <?if($scripts):?>
    <? foreach($scripts as $script): ?>
        <script type = "text/javascript" src="/JS/<?=$script;?>.js"></script>
    <? endforeach; ?>
    <?endif;?>
    <title><?=$title;?></title>
</head>
<body>
<div id = "wrapper">
    <header>
        <div>
            <nav>
                <ul>
                    <li>
                        <a href="http://<?=SITE_NAME;?>/admin"> Редактировать статьи </a>
                    </li>
                    <li>
                        <a href="http://<?=SITE_NAME;?>/add_article"> Добавить статью </a>
                    </li>
                    <li>
                        <a href="http://<?=SITE_NAME;?>/edit_category"> Редактировать категории </a>
                    </li>
                    <li>
                        <a href="http://<?=SITE_NAME;?>/edit_tags"> Редактировать теги </a>
                    </li>

                </ul>

            </nav>
        </div>
    </header>