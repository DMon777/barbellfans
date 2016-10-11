<main>
    <h2>Редактировать статью</h2>

    <script type="text/javascript">
        function delete_comment(comment_id){

            if(confirm("Вы действительно хотите удалить этот коммментарий?")){
                window.location='http://<?=SITE_NAME;?>/delete/item/comment/id/'+comment_id;
            }
            else{
                return false;
            }
        }
    </script>
    <form method="post" action="" enctype="multipart/form-data">

        <table>
            <tr>
                <td> title </td>
                <td> <input type="text" name="title" value="<?=$article['title'];?>"> </td>
            </tr>
            <tr>
                <td> keywords </td>
                <td> <input type="text" name="keywords" value="<?=$article['keywords'];?>"> </td>
            </tr>
            <tr>
                <td> description </td>
                <td> <input type="text" name="description" value="<?=$article['description'];?>"> </td>
            </tr>
            <tr>
                <td> Заголовок </td>
                <td> <input type="text" name="headline" value="<?=$article['header'];?>"> </td>
            </tr>
            <tr>
                <td> Вступительная статья </td>
                <td><textarea name="small_article" class = "small_article"> <?=$article['small_article'];?> </textarea></td>
            </tr>
            <tr>
                <td> Полная статья </td>
                <td> <textarea name="full_article" class = "full_article" > <?=$article['full_article'];?> </textarea></td>
            </tr>

            <tr>
                <td>Категория</td>
                <td>
                    <select name = "category">
                        <?foreach($categories as $key => $val):?>
                            <option  value="<?=$val['id'];?>" <?if($val['id'] == $article['category']):?>
                                selected
                            <?endif;?>
                                >
                                <?=$val['title'];?></option>
                        <?endforeach;?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>tags</td>
                <td>
                    <?foreach($tags as $key => $val):?>
                        <input type="checkbox"
                        <?foreach($article['tags'] as $k => $v):?>

                            <?if($val['id'] == $v['id']):?>
                                checked
                            <?endif;?>
                        <?endforeach;?>
                        value = "<?=$val['id'];?>" name="tags[]"> <?=$val['title'];?>&nbsp;|

                    <?endforeach;?>
                </td>
            </tr>

            <td> Изображение </td>
            <td>  <img src="http://<?=SITE_NAME;?>/images/article_images/<?=$article['image'];?>" alt = "изображение статьи" width="300" height="200"></td>
            </tr>


            <td> сменить изображение</td>
            <td><input type="file" name="article_image" id="article_image"></td>
            </tr>

            <tr>
                <td colspan="2"> <input type="submit" name="save_changes" value="SAVE"> </td>
            </tr>
        </table>
    </form>

    <?php

    if($comments){
            echo "<h2>Комментарии</h2>";
        echo $comments;
    }

    ?>

</main>