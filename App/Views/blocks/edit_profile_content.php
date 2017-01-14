
<div id = "bread_crumbs">
    <a href = "/index">главная /</a>  <span>Редактировать профиль</span>
</div>

<main>

    <article class="content_block">

        <?if($_SESSION['auth']['user']):?>

            <h1>Редактировать профиль</h1>

            <div id ="form">
                <form method="post" action="#" enctype="multipart/form-data">

                    <p>Аватар</p>
                    <img src="images/avatars/<?=$user['avatar'];?>" id="edit_avatar"  alt = "avatar"><br>
                    <span class = 'registration_error_message avatar_error'></span>

                    <p>Логин</p>
                    <input type="text" name = "login" value = "<?=$user['login'];?>" id="edit_login"><br>
                    <span class = 'registration_error_message login_error'></span>

                    <input type="button" name="edit_login" value="сохранить" class="button">
                </form>

                <div id = "subscription_management">
                    <div id = "show_categories">
                        <img src="images/subscription_icon.png">
                        <h3>    Управление подпиской </h3>
                    </div>

                    <form method="post" action="">
                        <div id = "subscribe_categories">

                            <?if($subscribe_categories):?>

                            <?foreach($categories as $key => $val):?>


                                <div> <input type="checkbox" class = "categories_checkbox" name="category[]" value="<?=$val['id']?>"
                                        <?foreach($subscribe_categories as $k=>$v):?>
                                            <?if($val['id'] == $v['category_id']):?>
                                                checked
                                            <?endif;?>
                                        <?endforeach;?>
                                        >
                                    <?=$val['title'];?>
                                </div>
                            <?endforeach;?>

                            <input type="button" name="subscribe" id="edit_subscribe" value="Изменить" class="button">

                            <span class="registration_error_message"></span>
                        </div>
                    </form>

                    <?else:?>
                    <p>Вы еще не подписаны на рассылку , для того что-бы подписаться перейдите по
                        <a href="/subscribe"> ссылке.</a>
                    </p>

                    <?endif;?>
                </div> <!-- end subscribtion menegment  -->

            </div><!-- end #form  -->

                              <!-- modal -->
            <div class="overlay" id="modal-overlay"></div>
            <div class="modal js-modal">
                <p class="modal_message"> Вы действительно хотите удалить эту закладку? </p>
                <a id="modal-confirm" class="button">да</a>
                <a href="#"  id="modal-close" class="button">нет</a href="#" >
            </div>


            <div id = "bookmarks">
                <div id = "show_bookmarks" >
                    <img src="/images/bookmark_icon2.png">
                    <h3>Закладки</h3>
                </div>
            </div>


            <div id = "bookmarks_list">
                <?if($bookmarks):?>

                    <?foreach($bookmarks as $key => $val):?>
                        <?foreach ($val as $k => $v):?>
                            <div class = "bookmark">

                                <a href = "/article/id/<?=$v['id']?>">
                                    <img src="/images/article_images/<?=$v['image'];?>" class="bookmark_image">
                                </a>
                                <a href="/article/id/<?=$v['id']?>" class="bookmark_header">
                                    <h3><?=$v['header'];?></h3>
                                </a>

                                <img src="/images/delete_icon.png" class = "delete_bookmark" id = "<?=$v['id']?>">


                            </div>
                        <?endforeach;?>
                    <?endforeach;?>

                <?else:?>
                    <p>Закладок пока что нет.</p>
                <?endif;?>
            </div>



        <?else:?>
            <p>Извини , но тебя сдесь быть не должно!!!</p>

        <?endif;?>


        <div class = "clear"></div>

    </article>

</main>