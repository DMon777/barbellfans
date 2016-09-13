<div id = "bread_crumbs">
    <a href = "http://<?=SITE_NAME;?>/index">главная /</a>  <span>регистрация</span>
</div>

<main>

    <article class="content_block">
        <h1>Регистрация</h1>

        <?if($message):?>
        <p><?=$message;?></p>

        <?else:?>

            <div id="form">
                <form method="post" action="" id="registration_form">

                    <p>Логин</p>
                    <input type="text" name="login" id="login"><br>
                    <span class = 'registration_error_message login_error'></span>

                    <p>E -mail</p>
                    <input type="text" name="email" id="email"><br>
                    <span class = 'registration_error_message email_error'></span>

                    <p>Пароль</p>
                    <input type="password" name="password" id = "password"><br>
                    <span class = 'registration_error_message password_error'></span>

                    <p>Повторите пароль</p>
                    <input type="password" name="confirm_password" id = "confirm_password"><br>
                    <span class = 'registration_error_message confirm_password_error'></span>

                    <p>Капча</p>

                    <input type="hidden" name = "rand_number" value="<?=$rand_number;?>" id = "rand_number">
                    <div id = "captcha_number"> Двадцать один - <?=$rand_number;?> =  <input type="text" name="captcha" id = "captcha">

                    </div>
                    <span class = 'registration_error_message captcha_error'></span>

                    <input type="button" name="registration" value="Зарегестрироваться" class="button" id="registration_submit">
                </form>

            </div>

            <p id="registration_message"></p>
        <?endif;?>

        <div class = "clear"></div>

    </article>

</main>