<main>

    <script type="text/javascript">
        function delete_tag(tag_id){

            if(confirm("Вы действительно хотите удалить этот тег?")){
                window.location='http://<?=SITE_NAME;?>/delete/item/tag/id/'+tag_id;
            }
            else{
                return false;
            }
        }
    </script>
    <h2>Редактировать теги</h2>

    <h3>Добавить тег : </h3>

    <form method="post" action="">
        <table>
            <tr>
                <td><label for="new_tag">Заголовок тега  </label></td>
                <td><input type="text" name="new_tag"><br></td>
            </tr>

            <tr>
                <td><label for="tag_href">Ссылка тега  </label></td>
                <td><input type="text" name="tag_href"><br></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name = "add_new_tag" value="добавить"></td>
            </tr>

        </table>
    </form>

    <h2>Редактировать тег:</h2>

    <form method="post" action = "">
        <table>

            <tr>
                <th>Название</th>
                <th>Ссылка</th>
                <th>Удалить</th>
            </tr>
            <?foreach($tags as $key => $val):?>
                <tr>
                    <td>
                        <input type="text" name = "tag_name[]" value="<?=$val['title'];?>">
                    </td>
                    <td>
                        <input type="text" name = "tag_href[]" value="<?=$val['href'];?>">
                    </td>
                    <td><a href = "" onclick="delete_tag(<?=$val['id'];?>)"> Удалить </a> </td>
                </tr>

            <?endforeach;?>
            <tr>
                <td colspan="3">
                    <input type="submit" name = "change_tag" value="Применить">
                </td>
            </tr>
        </table>

    </form>


</main>