<div class="container" id="main">
    <h2 class="text-center">Добавить статью</h2>
    <div class="row">


        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputFile" class="col-sm-2 control-label">Изображение</label>
                <div class="col-sm-10">
                    <input type="file" name="article_image"  id="inputFile" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputkeywords" class="col-sm-2 control-label">keywords</label>
                <div class="col-sm-10">
                    <input type="text" name = "keywords" class="form-control" id="inputkeywords" placeholder="keywords">
                </div>
            </div>
            <div class="form-group">
                <label for="inputdescription" class="col-sm-2 control-label">description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" id="inputdescription" placeholder="description">
                </div>
            </div>
            <div class="form-group">
                <label for="inputtitle" class="col-sm-2 control-label">title</label>
                <div class="col-sm-10">
                    <input type="text" name = "title" class="form-control" id="inputtitle" placeholder="title">
                </div>
            </div>
            <div class="form-group">
                <label for="inputheader" class="col-sm-2 control-label">Заголовок</label>
                <div class="col-sm-10">
                    <input type="text" name="headline" class="form-control" id="inputheader" placeholder="Заголовок">
                </div>
            </div>
            <div class="form-group">
                <label for="inputshorttext" class="col-sm-2 control-label">Вступительная статья</label>
                <div class="col-sm-10">
                    <textarea name="small_article"  id="inputshorttext" class="form-control"  rows="3" ></textarea>

                </div>
            </div>
            <div class="form-group">
                <label for="inputfulltext" class="col-sm-2 control-label">Полная статья</label>
                <div class="col-sm-10">
                    <textarea name="full_article" id="inputfulltext" class="form-control" rows="5" ></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="inputcategory" class="col-sm-2 control-label">Категории</label>
                <div class="col-sm-10">
                    <select name = "category" id="inputcategory" class="form-control">
                    <?foreach($categories as $key => $val):?>
                        <option  value="<?=$val['id']?>">
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
                            <input type="checkbox" value="<?=$val['id']?>" name="tags[]"> <?=$val['title'];?>
                        </label>
                    <?endforeach;?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="submit" name="add_article" value="Сохранить" class="btn btn-default text-center submit_button">
                </div>
            </div>
        </form>

    </div>

</div>

