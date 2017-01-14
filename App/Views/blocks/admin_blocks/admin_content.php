    <div class="container" id="main">
        <h2 class="text-center">Статьи</h2>
        <div class="row">
            <table class="table table-bordered table-responsive table-hover">

                <?foreach($articles as $key => $val):?>
                <tr>
                    <td><?=$val['title'];?></td>
                    <td>
                        <a href = "/edit_article/id/<?=$val['id'];?>">Редактировать <span class="glyphicon glyphicon-edit"></span> </a>
                    </td>
                    <td>
                        <button class="btn btn-default delete_article" value="<?=$val['id']?>" >Удалить <span class="glyphicon glyphicon-trash"></button>
                    </td>
                </tr>

                <?endforeach;?>
            </table>
        </div>

        <div class="row">

            <div class="col-md-4  col-md-offset-5">

                <?if($navigation):?>

                <nav aria-label="Page navigation" >
                    <ul class="pagination pagination-lg">

                        <?if($navigation['arrow_back']):?>
                            <li>
                                <a href="/admin/page/<?=$navigation['arrow_back'];?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>

                        <?else:?>

                            <li class = "disabled">
                                <a  href="/admin/page/<?=$navigation['arrow_back'];?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>

                        <?endif;?>

                        <? if($navigation['previous']):?>
                            <? foreach($navigation['previous'] as $val):?>
                                <li>
                                    <a href="/admin/page/<?=$val;?>"><?=$val;?></a>
                                </li>
                            <? endforeach;?>
                        <? endif;?>

                        <? if($navigation['current']):?>
                            <li class = "active">
                                <a  href="/admin/page/<?=$navigation['current'];?>"><?=$navigation['current'];?></a>
                            </li>
                        <? endif;?>


                        <? if($navigation['next']):?>
                            <? foreach($navigation['next'] as $val):?>
                                <li>
                                    <a href="/admin/page/<?=$val;?>"><?=$val;?></a>
                                </li>

                            <? endforeach;?>
                        <? endif;?>

                        <? if($navigation['arrow_forward']):?>
                            <li>
                                <a href="/admin/page/<?=$navigation['arrow_forward'];?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>

                            <?else:?>

                            <li class="disabled">
                                <a href="" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>

                        <? endif;?>
                    </ul>
                </nav>
            </div>
            <?endif;?>
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
                <p>Вы действительно хотите удалить эту статью?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Отмена</button>
                <a id="confirm-delete" href=""  class="btn btn-danger">Удалить</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal_window -->
