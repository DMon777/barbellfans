<div id = "bread_crumbs">
    <a href = "http:<?=SITE_NAME;?>/index">главная /</a>  <span>Обратная связь</span>
</div>

<main>

    <article class="content_block">
        <h1>Обратная связь</h1>

        <div id="form">
            <p class="reconstruction_message"> Все вопросы , просьбы , пожелания , а так же предложения о сотрудничестве вы можете
                присылать автору сайта на email</p>
            <form method="post" action="#">
                <p>E-mail</p>
                <input type="text" name="email"><br>
                <span class = 'registration_error_message'>Сообщение об ошибке</span>

                <p>Сообщение</p>
                <textarea></textarea>

                <input type="submit" name="reconstruction" value="Отпрвавить" class="button">
            </form>

        </div>

        <p class="reconstruction_message">Сообщение об ошибке.</p>


        <div class = "clear"></div>

    </article>

</main>