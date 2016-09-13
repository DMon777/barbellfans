<div id = "bread_crumbs">
    <a href = "http://<?=SITE_NAME;?>/index">главная /</a>  <span>Подписка</span>
</div>

<main>

    <article class="content_block">
        <h1>Подписка</h1>

        <?if($message):?>
            <p><?=$message;?></p>

        <?else:?>

            <div id="form">
                <form method="post" action="" id="registration_form">
                    <?if($_SESSION['auth']['user']):?>
                    <p>Привет <?=$_SESSION['auth']['user'];?> !!!</p>

                    <?else:?>
                        <p>Имя</p>
                        <input type="text" name="name" id="login"><br>
                        <span class = 'registration_error_message login_error'></span>

                        <p>E -mail</p>
                        <input type="text" name="email" id="email"><br>
                        <span class = 'registration_error_message email_error'></span>
                    <?endif;?>

                    <div id="subscribe_categories">
                    <p>Выберете категории по которым хотите получать уведомления:</p>
                        <div> <input type="checkbox" name="all" value="all" id = "select_all">
                           Выбрать все
                        </div>
                        <?foreach($categories as $key => $val):?>


                            <div> <input type="checkbox" class = "categories_checkbox" name="category[]" value="<?=$val['id']?>">
                                <?=$val['title'];?>
                            </div>
                        <?endforeach;?>
                    </div>


                    <input type="submit" name="subscribe" value="Подписаться" class="button">
                </form>

            </div>

            <p id="registration_message"></p>
        <?endif;?>

        <div class = "clear"></div>

    </article>

</main>