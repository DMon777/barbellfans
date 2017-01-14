<div class="container" id="main">

    <div class="row">
     <div class="col-md-8 col-md-offset-2">
           <h2 class="text-center">Редактировать теги</h2>

            <h3 class="text-center">Добавить тег : </h3>

            <form method="post" action="" class="form-horizontal">

                <div class="form-group">
                    <label for="inputHeaderTag" class="col-sm-2 control-label">Заголовок тега</label>
                    <div class="col-sm-10">
                        <input type="text" name = "new_tag" class="form-control" id="inputHeaderTag" placeholder="заголовок тега">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputTagHeader" class="col-sm-2 control-label">Ссылка тега</label>
                    <div class="col-sm-10">
                        <input type="text" name = "tag_href" class="form-control" id="inputTagHeader" placeholder="Ссылка тега">
                    </div>
                </div>

                <input type="submit" name = "add_new_tag" value="добавить" class="btn btn-default center-block">

            </form>
         <hr>
        </div>
    </div>



    <div class="row" id="edit_tags">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Редактировать тег:</h2>

            <form method="post" action = "" >
                <table class="table table-bordered table-responsive table-hover">

                    <tr>
                        <th class="text-center">Название</th>
                        <th class="text-center">Ссылка</th>
                        <th class="text-center">Удалить</th>
                    </tr>
                    <?foreach($tags as $key => $val):?>
                        <tr>
                            <td>
                                <input type="text" name = "tag_name[]" value="<?=$val['title'];?>">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </td>
                            <td>
                                <input type="text" name = "tag_href[]" value="<?=$val['href'];?>">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </td>
                            <td>
                                <button class="btn btn-default delete_tag" value="<?=$val['id']?>"> Удалить <span class="glyphicon glyphicon-trash"></span> </button>
                            </td>
                        </tr>

                    <?endforeach;?>
                    <tr>
                        <td colspan="3">
                            <input type="submit" class="btn btn-default" name = "change_tag" value="Применить">
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>

    <div class="modal fade" id="modal_window" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Удалить</h4>
                </div>
                <div class="modal-body">
                    <p>Вы действительно хотите удалить этот тег?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Отмена</button>
                    <a id="confirm-delete" href=""  class="btn btn-danger">Удалить</a>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </div>


</div>


