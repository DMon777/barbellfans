<main>

    <script type="text/javascript">
        function delete_category(category_id){
            if(confirm("Вы действительно хотите удалить эту категорию?")){
                window.location='http://<?=SITE_NAME;?>/delete/item/category/id/'+category_id;
            }
            else{
                return false;
            }
        }
    </script>

    <h2>Редактировать категории</h2>
        <?if($menu):?>
        <form method="post" action="">


           <? foreach($menu as $key=> $val):?>

            <ul>
                <li><?=$val['title'];?>
                    <select name = "change_parents[]">
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
                </li>
            </ul>

          <?endforeach;?>

            <input type = "submit" value = "Изменить" name = "change_parent">
        </form>
        <?endif;?>

        <hr>

    <div id = "category_sorting">
        <h2>Сортировка пунктов меню</h2>
        <?if($sorting_menu):?>
            <form method="post" action="">
                <?=$sorting_menu;?>
                <input type="hidden" value="" name="sorting">
                <input type = "submit" value = "sort" name = "sort" id="sort">
            </form>
        <?endif;?>

    </div>

    <h2>Редактировать названия </h2>

    <form method="post" action = "">
        <table>

            <tr>
                <th>Название</th>
                <th>Ссылка</th>
                <th>Удалить</th>
            </tr>
            <?foreach($menu as $key => $val):?>
                <tr>
                    <td>
                        <input type="text" name = "menu_name[]" value="<?=$val['title'];?>">
                    </td>
                    <td>
                        <input type="text" name = "menu_href[]" value="<?=$val['category_name'];?>">
                    </td>
                    <td><a href = "" onclick="delete_category(<?=$val['id'];?>)"> Удалить </a> </td>
                </tr>

            <?endforeach;?>
            <tr>
                <td colspan="3">
                    <input type="submit" name = "change_menu_name" value="Применить">
                </td>
            </tr>
        </table>
    </form>

    <h2>Добавить категорию</h2>
    <h3>Родительская категория:</h3>
    <form method="post" action = "">
    <table>
        <tr>
            <td>
                Заголовок меню
            </td>
            <td>
                <input type="text" name = "parent_category">
            </td>
        </tr>
        <tr>
            <td>
                ссылка меню
            </td>
            <td>
                <input type="text" name = "parent_href">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type = "submit" value = "Добавить" name = "add_parent">
            </td>
        </tr>

    </table>

    </form>

    <h3>Дочерняя категория:</h3>
    <form method="post" action = "">
        <table>
            <tr>
                <td>
                    Заголовок меню
                </td>
                <td>
                    <input type="text" name = "subsidiary_category">
                </td>
            </tr>
            <tr>
                <td>
                    Родительская категория
                </td>
                <td>
                   <select name = "category_parent">
                        <?foreach($parent_categories as $key => $val):?>

                            <option value="<?=$val['id']?>" ><?=$val['title'];?></option>

                       <?endforeach;?>

                   </select>
                </td>
            </tr>
            <tr>
                <td>
                    ссылка меню
                </td>
                <td>
                    <input type="text" name = "subsidiary_href">
                </td>
            </tr>

             <tr>
                <td colspan="2">
                    <input type = "submit" value = "Добавить" name = "add_subsidiary">
                </td>
            </tr>

        </table>

    </form>


</main>