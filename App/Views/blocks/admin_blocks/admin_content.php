<main>
    <h2> Статьи</h2>

    <script type="text/javascript">

        function delete_article(article_id){

            if(confirm("Вы действительно хотите удалить эту статью?")){
                window.location='http://<?=SITE_NAME;?>/delete/item/article/id/'+article_id;
            }
            else{
                return false;
            }
        }

    </script>

    <?if($articles):?>

    <table  >


        <?foreach($articles as $key => $val):?>
            <tr>
                <td><?=$val['title']?></td>
                <td><a href = "http://<?=SITE_NAME;?>/edit_article/id/<?=$val['id'];?>">Редактировать</a></td>
                <td><a href = "" onclick="delete_article(<?=$val['id'];?>)">Удалить</a></td>
            </tr>

        <?endforeach;?>


    </table>

    <?else:?>

    <p>Статей нет!!!</p>

    <?endif;?>

    <div id="navigation">

        <form method = "get" action = "http://<?=SITE_NAME;?>/admin/page/">
            <input type="text" name="page" >
            <input type="submit" name="go" value="">
        </form>

    </div>

</main>