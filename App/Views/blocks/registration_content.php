<div id = "bread_crumbs">
    <a href = "http://<?=SITE_NAME;?>/index">главная /</a>  <span>регистрация</span>
</div>

<main>

    <article class="content_block">
        <h1>Регистрация</h1>

        <div id="form">
            <form method="post" action="#">

                <p>Логин</p>
                <input type="text" name="login"><br>
                <span class = 'registration_error_message'>Сообщение об ошибке</span>

                <p>E -mail</p>
                <input type="text" name="email"><br>
                <span class = 'registration_error_message'>Сообщение об ошибке</span>

                <p>Пароль</p>
                <input type="password" name="password"><br>
                <span class = 'registration_error_message'>Сообщение об ошибке</span>

                <p>Повторите пароль</p>
                <input type="password" name="confirm_password"><br>
                <span class = 'registration_error_message'>Сообщение об ошибке</span>

                <p>Капчпа</p>
                <div id = "captcha_number"> Двадцать один - 3 =  <input type="text" name="captcha" id = "captcha_input"> </div>
                <span class = 'registration_error_message'>Сообщение об ошибке</span>

                <input type="submit" name="registration" value="Зарегестрироваться" class="button">
            </form>

        </div>

        <p id="registration_message">Сообщение об удачной или неудачной регистрации</p>


        <div class = "clear"></div>

    </article>

</main>