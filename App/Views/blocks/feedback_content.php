<div id = "bread_crumbs">
    <a href = "http://<?=SITE_NAME;?>/index">главная /</a>  <span>Обратная связь</span>
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
                <span class = 'registration_error_message feedback_email_error'></span>

                <p>Сообщение</p>
                <textarea name = "feedback_message" ></textarea>
                <span class = 'registration_error_message feedback_message_error'></span>

                <input type="button" name="feedback" value="Отпрвавить" class="button">
            </form>

        </div>

        <p class="reconstruction_message feedback_message"><?=$message;?></p>


        <div class = "clear"></div>

    </article>

</main>