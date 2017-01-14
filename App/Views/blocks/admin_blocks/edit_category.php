<div class="container" id="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

    <h2 class="text-center">Редактировать категории</h2>
        <?if($menu):?>
        <form method="post" action="" class="form-horizontal">



           <? foreach($menu as $key=> $val):?>

               <div class="form-group">
                   <label for="inputfulltext" class="col-sm-2 control-label"><?=$val['title'];?></label>
                   <div class="col-sm-10 text-center">


                       <select name = "change_parents[]" id="inputcategory" class="form-control">
                           <option value = "0" <?if($val['parent_id'] == 0):?> selected <?endif;?>>
                               Родительская
                           </option>

                           <?for($i = 0;$i < count($parent_categories);$i++):?>

                               <?php
                               if($val['id'] == $parent_categories[$i]['id']) {
                                   continue;
                               }
                               ?>

                               <option value = "<?=$parent_categories[$i]['id']?>"
                                   <?if($val['parent_id'] == $parent_categories[$i]['id']):?> selected
                                   <?endif;?> >
                                   <?=$parent_categories[$i]['title'];?>
                               </option>

                           <?endfor;?>

                       </select>


                   </div>
               </div>

          <?endforeach;?>

            <input type = "submit" value = "Изменить" name = "change_parent" class="btn btn-default center-block">
        </form>
        <?endif;?>

        <hr>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4" id="category_sorting">
            <h2 class="text-center">Сортировка пунктов меню</h2>
            <?if($sorting_menu):?>
                <form method="post" action="">
                    <?=$sorting_menu;?>
                    <input type="hidden" value="" name="sorting">
                    <input type = "submit" value = "sort" name = "sort" id="sort" class="btn btn-default center-block">
                </form>
            <?endif;?>
            <hr>
        </div>
    </div>



  <div class="row" id="edit_category_name">
    <div class="col-md-8 col-md-offset-2">
        <h2>Редактировать названия </h2>

    <form method="post" action = "" class="form-horizontal">
        <table class="table table-bordered table-responsive table-hover">

            <tr>
                <th class="text-center">Название</th>
                <th class="text-center">Ссылка</th>
                <th class="text-center">Удалить</th>
            </tr>
            <?foreach($menu as $key => $val):?>
                <tr>
                    <td>
                        <input type="text" name = "menu_name[]" value="<?=$val['title'];?>">
                        <span class="glyphicon glyphicon-pencil"> </span>
                    </td>
                    <td>
                        <input type="text" name = "menu_href[]" value="<?=$val['category_name'];?>">
                        <span class="glyphicon glyphicon-pencil"> </span>
                    </td>
                    <td>
                        <button class="btn btn-default delete_category" value="<?=$val['id'];?>"> Удалить <span class="glyphicon glyphicon-trash"></span> </button>
                    </td>
                </tr>

            <?endforeach;?>
            <tr>
                <td colspan="3">
                    <input type="submit" class = "btn btn-default center-block" name = "change_menu_name" value="Применить">
                </td>
            </tr>
        </table>
    </form>
    <hr>
    </div>
  </div>

<div class="row">
   <div class="col-md-8 col-md-offset-2"> <h2 class="text-center">Добавить категорию</h2>
    <h3 class="text-center">Родительская категория:</h3>
    <form method="post" action = "" class="form-horizontal">


        <div class="form-group">
            <label for="inputHeaderMenu" class="col-sm-2 control-label">Заголовок меню</label>
            <div class="col-sm-10">
                <input type="text" name = "parent_category" class="form-control" id="inputHeaderMenu" placeholder="Заголовок меню">
            </div>
        </div>


        <div class="form-group">
            <label for="inputHrefMenu" class="col-sm-2 control-label">Ссылка меню</label>
            <div class="col-sm-10">
                <input type="text" name = "parent_href" class="form-control" id="inputHrefMenu" placeholder="ссылка меню">
            </div>
        </div>

        <input type = "submit" value = "Добавить" name = "add_parent" class="btn btn-default center-block">

    </form>

    <h3 class="text-center">Дочерняя категория:</h3>
    <form method="post" action = "" class="form-horizontal">

        <div class="form-group">
            <label for="inputHeaderMenu2" class="col-sm-2 control-label">Заголовок меню</label>
            <div class="col-sm-10">
                <input type="text" name = "subsidiary_category" class="form-control" id="inputHeaderMenu2" placeholder="заголовок меню">
            </div>
        </div>

        <div class="form-group">
            <label for="inputParent" class="col-sm-2 control-label">Родительская категория</label>
            <div class="col-sm-10">
                <select name = "category_parent" id="inputcategory" class="form-control">
                    <?foreach($parent_categories as $key => $val):?>

                        <option value="<?=$val['id']?>" ><?=$val['title'];?></option>

                    <?endforeach;?>

                </select>
            </div>
        </div>


        <div class="form-group">
            <label for="inputHrefMenu2" class="col-sm-2 control-label">Ссылка меню</label>
            <div class="col-sm-10">
                <input type="text" name = "subsidiary_href" class="form-control" id="inputHrefMenu2" placeholder="ссылка меню">
            </div>
        </div>

        <input type = "submit" value = "Добавить" name = "add_subsidiary" class="btn btn-default center-block">

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
                    <p>Вы действительно хотите удалить эту категорию?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Отмена</button>
                    <a id="confirm-delete" href=""  class="btn btn-danger">Удалить</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal_window -->




</div><!-- end container -->