$(document).ready(function(){

    $(".answer").bind('click',function(){

        $(this).css('display','none');
        $(".answer_form").hide();
        $(".answer").show();
        $(this).hide();
        $(this).parent().next().show(300);

        $(".close_icon").bind('click',function(){
            $(".answer_form").hide(100);
            $(".answer").css('display','block');
        });

    });

    $("#share_icon").bind("click",function(){

        $(this).css({
            '-webkit-transform': 'rotateZ(-180deg)',
            '-ms-transform': 'rotateZ(-180deg)',
            'transform':'rotateZ(-180deg)'
        });
        $(this).delay(300).hide(10);
        $("#share a").delay(300).show(300);

    });


});