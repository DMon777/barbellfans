<div id = "bread_crumbs">
    <a href = "http:<?=SITE_NAME;?>/index">главная /</a>  <span><?=$reconstruction;?></span>
</div>

<main>

    <article class="content_block">
        <h1><?=$reconstruction;?></h1>

        <div id="form">
            <p class="reconstruction_message"> Введите E-mail который вы указывали при регистрации и мы вышлем вым

                <?if($reconstruction == "Восстановление пароля"):?>
                    новый пароль.

                    <?else:?>
                    ваш логин по почте.
                <?endif;?>

                 </p>
            <form method="post" action="#">

                <input type="text" name="email"><br>
                <span class = 'registration_error_message'>Сообщение об ошибке</span>

                <input type="submit" name="reconstruction" value="Отпрвавить" class="button">
            </form>

        </div>

        <p class="reconstruction_message">Сообщение об ошибке.</p>


        <div class = "clear"></div>

    </article>

</main>