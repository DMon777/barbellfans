$(document).ready(function(){

  $(".sortable").sortable();

    $("#sort").bind("click",function(){

        var sorting = [];

        $('.sortable li').each(function(){
            sorting.push($(this).attr('id'));
        });
        $('input[name=sorting]').val(sorting.toString());
        $('.form_sorting').submit();

    });

});