
<div class="container" id="main">
    <h2 class="text-center">Редактировать статью</h2>
    <div class="row">


        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputfulltext" class="col-sm-2 control-label">Изображение</label>
                <div class="col-sm-10 text-center">
                    <img src="/images/article_images/<?=$article['image'];?>" width="300" height="200" alt = "изображение статьи" class="img-responsive img-thumbnail" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputFile" class="col-sm-2 control-label">Сменить изображение</label>
                <div class="col-sm-10">
                    <input type="file" name="article_image"  id="inputFile" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputkeywords" class="col-sm-2 control-label">keywords</label>
                <div class="col-sm-10">
                    <input type="text" name = "keywords" class="form-control" id="inputkeywords" value="<?=$article['keywords'];?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputdescription" class="col-sm-2 control-label">description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" id="inputdescription" value="<?=$article['description'];?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputtitle" class="col-sm-2 control-label">title</label>
                <div class="col-sm-10">
                    <input type="text" name = "title" class="form-control" id="inputtitle" value="<?=$article['title'];?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputheader" class="col-sm-2 control-label">Заголовок</label>
                <div class="col-sm-10">
                    <input type="text" name="headline" class="form-control" id="inputheader" value="<?=$article['header'];?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputshorttext" class="col-sm-2 control-label">Вступительная статья</label>
                <div class="col-sm-10">
                    <textarea name="small_article"  id="inputshorttext" class="form-control" rows="3" >
                        <?=$article['full_article'];?>
                    </textarea>

                </div>
            </div>
            <div class="form-group">
                <label for="inputfulltext" class="col-sm-2 control-label">Полная статья</label>
                <div class="col-sm-10">
                    <textarea name="full_article" id="inputfulltext" class="form-control" rows="5" ><?=$article['full_article'];?></textarea>
                </div>
            </div>


            <div class="form-group">
                <label for="inputcategory" class="col-sm-2 control-label">Категории</label>
                <div class="col-sm-10">
                    <select name = "category" id="inputcategory" class="form-control">
                        <?foreach($categories as $key => $val):?>
                            <option  value="<?=$val['id']?>"<?if($val['id'] == $article['category']):?>
                                selected
                            <?endif;?>
                                >
                                <?=$val['title'];?>
                            </option>
                        <?endforeach;?>
                    </select>
                </div>
            </div>



            <div class="form-group">
                <label  class="col-sm-2 control-label">tags</label>
                <div class="col-sm-10">
                    <div class="checkbox">

                        <?foreach($tags as $key => $val):?>
                            <label>
                                <input type="checkbox"

                                    <?foreach($article['tags'] as $k => $v):?>

                                        <?if($val['id'] == $v['id']):?>
                                            checked
                                        <?endif;?>
                                    <?endforeach;?>


                                value="<?=$val['id']?>" name="tags[]"> <?=$val['title'];?>
                            </label>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="submit" name="save_changes" value="Сохранить" class="btn btn-default text-center submit_button">
                </div>
            </div>
        </form>
    </div>

    <?if($comments):?>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Комментарии</h2>
            <?=$comments;?>
            </div>
        </div>

    <?endif;?>

    <div class="modal fade" id="modal_window" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Удалить</h4>
                </div>
                <div class="modal-body">
                    <p>Вы действительно хотите удалить этот комментарий?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Отмена</button>
                    <a id="confirm-delete" href=""  class="btn btn-danger">Удалить</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



</div>
