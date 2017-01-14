<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel = "stylesheet" href="/styles/bootstrap.min.css" type = "text/css">
    <link rel = "stylesheet" href="/styles/admin_styles.css" type = "text/css">
    <?if($scripts):?>
    <? foreach($scripts as $script): ?>
        <script type = "text/javascript" src="/JS/<?=$script;?>.js"></script>
    <? endforeach; ?>
    <?endif;?>
    <title><?=$title;?></title>
</head>
<body>

<div class="container-fluid" id="wrapper">
    <div class="row header">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Главная</a></li>
                        <li>
                            <a href= "/admin"> Редактировать статьи </a>
                        </li>
                        <li>
                            <a href= "/add_article"> Добавить статью </a>
                        </li>
                        <li>
                            <a href= "/edit_category"> Редактировать категории </a>
                        </li>
                        <li>
                            <a href= "/edit_tags"> Редактировать теги </a>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
