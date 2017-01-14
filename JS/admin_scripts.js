$(document).ready(function(){

    $(".disabled a,.active a").click(function(e){
        e.preventDefault();
    });

    $(".delete_comment").click(function(){
        var comment_id = $(this).val();
        $("#confirm-delete").attr('href','/delete/item/comment/id/'+comment_id);
        $("#modal_window").modal();
    });


    $(".delete_article").click(function(){
        var article_id = $(this).val();
        $("#confirm-delete").attr('href','/delete/item/article/id/'+article_id);
        $("#modal_window").modal();
    });

    $(".delete_tag").click(function(e){
        e.preventDefault();
        var tag_id = $(this).val();
        $("#confirm-delete").attr('href','/delete/item/tag/id/'+tag_id);
        $("#modal_window").modal();
    });

    $(".delete_category").click(function(e){
        e.preventDefault();
        var category_id = $(this).val();
        $("#confirm-delete").attr('href','/delete/item/category/id/'+category_id);
        $("#modal_window").modal();
    });

});