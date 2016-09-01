<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="/styles/style.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <? foreach($scripts as $script): ?>
        <script type = "text/javascript" src="/JS/<?=$script;?>.js"></script>
    <? endforeach; ?>
</head>
<body>
<header id = "header_top">

    <nav id="menu">
            <ul>
        <?foreach($menu as $key => $val):?>
            <?if(count($val['children'] ) > 0):?>
               <li>
                   <?=$val['title'];?>
                   <ul class = "inner_menu">
                    <?foreach ($val['children'] as $k => $v):?>
                        <li> <a href="http://<?=SITE_NAME;?>/<?=$v['href']?>"> <?=$v['title'];?></a></li>
                    <?endforeach;?>
                       </ul>
               </li>
            <?else:?>
                <li> <a href="http://<?=SITE_NAME;?>/<?=$val['href']?>"> <?=$val['title'];?></a></li>
           <?endif;?>
        <?endforeach;?>
            </ul>
    </nav>

    <nav id="adaptive_menu">

        <img id = "menu_icon" src="/images/menu_icon.png" alt = "menu">

        <ul>
            <?foreach($menu as $key => $val):?>
                <?if(count($val['children'] ) > 0):?>
                    <li>
                       <span> <?=$val['title'];?> </span>
                        <ul class = "inner_menu">
                            <?foreach ($val['children'] as $k => $v):?>
                                <li> <span> <a href="http://<?=SITE_NAME;?>/<?=$v['href']?>"> <?=$v['title'];?></a> </span> </li>
                            <?endforeach;?>
                        </ul>
                    </li>
                <?else:?>
                    <li> <span> <a href="http://<?=SITE_NAME;?>/<?=$val['href']?>"> <?=$val['title'];?></a> </span> </li>
                <?endif;?>
            <?endforeach;?>

        </ul>

    </nav>

    <div id = "logo">
        <a href = "http://<?=SITE_NAME;?>/index"><img src="/images/logo.png" alt = "barbellfans"></a>
    </div>

    <div class = "clear"></div>

</header>

<div id  = "wrapper">

    <div id = "header_background">
        <img src="/images/header_background.jpg" alt = "header_background">

        <div class = "social_icons">
            <ul>
                <li>
                    <a href="#"> <img src="/images/header_vk.png" alt = "vk"> </a>
                </li>
                <li>
                    <a href="#"> <img src="/images/header_facebook.png"  alt = "facebook">  </a>
                </li>
                <li>
                    <a href="#"> <img src="/images/header_odnoklassniki.png"  alt = "odnoklassniki">  </a>
                </li>
                <li>
                    <a href="#"> <img src="/images/header_rss.png"  alt = "rss">  </a>
                </li>
            </ul>
        </div>

        <div id = "auth">

            <div id="auth_form">
                <p class = "auth_error_message"> Логин и/или пароль введены неверно! </p>

                <form method="post" action="">
                    <input type="text" name="auth_login" placeholder="логин"><br>
                    <input type="password" name="auth_password" placeholder="пароль"> <br>
                    <input type = "submit" name = "enter" value="ВОЙТИ">

                </form>
                <div id="forgot"> <a href="">Забыли логин</a> | <a href="">Забыли пароль</a> | <a href="">Регистрация</a></div>
            </div>

        </div>

        <img id="auth_icon" src="/images/auth_icon.png" alt = "auth">

        <div id = "adaptive_auth">

            <img id = "auth_close" src="/images/close_icon1.png" alt = "close">

            <div id="adaptive_auth_form">
                <p class = "auth_error_message"> Логин и/или пароль введены неверно! </p>

                <form method="post" action="">
                    <input type="text" name="auth_login" placeholder="логин"><br>
                    <input type="password" name="auth_password" placeholder="пароль"><br>
                    <input type = "submit" name = "enter" value="ВОЙТИ">

                </form>
                <div id="adaptive_forgot"> <a href="">Забыли логин</a> | <a href="">Забыли пароль</a> | <a href="">Регистрация</a></div>
            </div>


        </div>

    </div>

    <div id = "search">
        <form method = "post" action = "">
            <input type="text" name = "search_string" placeholder="Search...">
            <input type="submit" name="search" value = "">
        </form>
    </div>