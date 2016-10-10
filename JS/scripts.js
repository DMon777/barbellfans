$(document).ready(function(){


    $(".answer").bind('click',function(){

        $(this).css('display','none');
        $(".answer_form").hide();
        $(".answer").show();
        $(this).hide();
        $(this).parent().next().next().show();

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

    $("#menu_icon").bind("click",function(){

        $("#adaptive_menu>ul").slideToggle();

    });

    $("#adaptive_menu span").bind("click",function(){
            $(this).next().slideToggle(200);
    });

    $("#auth_icon").bind("click",function(){

        $(this).css('opacity','0');
        $("#adaptive_auth").slideDown(500);

    });

    $("#auth_close").bind("click",function(){
        $("#adaptive_auth").slideUp(100);
        $("#auth_icon").css('opacity','1');
    });

    $("#select_all").bind('click', function (){



       if(!$(this).is(":checked")){
           $(".categories_checkbox").prop("checked", false) ;
       }
        else{
           $(".categories_checkbox").prop("checked", true) ;
       }
    })

    $(".likes_img").bind('click',function(){

        var article_id = $(this).siblings('.article_id').val();
        var that = $(this);
        $.ajax({
            url:'/ajax/method/add_like',
            type:'post',
            data:{article_id:article_id},
            success:function(result){
                if(result == "Извини,но нужно авторизоваться,иначе никак."){
                    alert(result);
                }
                else{
                    that.siblings('.count_likes').html(result);
                }
            }

        });
    });


    $("[name=send_comment]").bind("click",function(){


        var comment = $(this).siblings("textarea").val();
        if(comment.length < 1){
            $(this).parent().next(".comment_error_message").hide().fadeIn(500).html("Вы не ввели комментарий");
            return false;
        }
        else{
            $(this).parent().next(".comment_error_message").html("");
        }

        if($(this).siblings().is('[type=text]')) {


            var email =  $(this).siblings("[name=email]").val();
            if(email.length < 1){
                $(this).parent().next(".comment_error_message").hide().fadeIn(500).html("Вы не ввели email");
                return false;
            }
            else{
                $(this).parent().next(".comment_error_message").html("");
            }

            var pattern = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;

            if(email.search(pattern) != 0){

                $(this).parent().next(".comment_error_message").hide().fadeIn(500).html("Некоректный email адрес!");
                return false;
            }
            else{
                $(this).parent().next(".comment_error_message").html("");
            }
        }

        $(this).parent("form").submit();

    });


    $("[name=reconstruction]").bind("click",function(){

        var pattern = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;
        var email =  $(this).siblings("[name=email]").val();

        if(email.length < 1){
            $(this).siblings(".registration_error_message").hide().fadeIn(500).html("Вы не ввели email");
            return false;
        }
        else{
            $(this).siblings(".registration_error_message").html("");
        }

        if(email.search(pattern) != 0){

            $(this).siblings(".registration_error_message").hide().fadeIn(500).html("Некоректный email адрес!");
            return false;
        }
        else{
            $(this).siblings(".registration_error_message").html("");
        }

       $(this).parent("form").submit();
    });

    $("#show_categories").bind("click",function(){
        $(this).next("form").slideToggle();
    });

    $("#show_bookmarks").bind("click",function(){
        $(this).next("div").slideToggle();
    });

    $("[name=edit_login]").bind("click",function(){

        var login = $("#edit_login").val();

        if(login.length < 1 ){
            $(".login_error").hide().fadeIn(500).text("Вы не ввели логин!");
            return false;
        }

        $.ajax({
            url:'ajax/method/validate_login',
            type:'post',
            data:{login:login},
            success:function(result){
                if(result.length > 0){
                    $(".login_error").hide().fadeIn(100).text(result);
                }
                else{
                    $(".login_error").text('');
                }
            }
        });

        if($(".login_error").html().length > 0){
            return false;
        }

        else{
            $(this).parent("form").submit();
        }


    });

    $("#edit_subscribe").bind("click",function(){

        var categories = [];

        $(".categories_checkbox:checkbox:checked").each(function(){
            categories.push($(this).val());
        });

        if(categories.length == 0){
            $(this).siblings(".registration_error_message").hide().fadeIn(500).text("Вы не ввели ни одной категории!");
        }
        else{
            $(this).siblings(".registration_error_message").hide();
            $(this).parent().parent("form").submit();
        }

    });

    $("#subscribe").bind("click",function(){

        var name = $("#name").val();
        var email = $("#email").val();
        var categories = [];

        if(name.length == 0 ){
           $(this).siblings(".name_error").hide().fadeIn(500).text("вы забыли ввести имя!");
            return false;
        }

        else{
            $(this).siblings(".name_error").hide();
        }

        var namePattern = /(^[^а-яА-Я ])+([^а-яА-Я ])+[^а-яА-Я ]$/;

        if(name.search(namePattern) != 0){

            $(this).siblings(".name_error").hide().fadeIn(500).text("Нельзя вводить русские буквы и пробелы!");
            return false;
        }
        else{
            $(this).siblings(".name_error").text("");
        }

        if(email.length == 0 ){
            $(this).siblings(".email_error").hide().fadeIn(500).text("вы забыли ввести email!");
            return false;
        }

        else{
            $(this).siblings(".email_error").hide();
        }

        var emailPattern = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;

        if(email.search(emailPattern) != 0){

            $(this).siblings(".email_error").hide().fadeIn(500).text("Вы что-то напутали,не может быть такого email адреса.");
            return false;
        }
        else{
            $(this).siblings(".email_error").text("");
        }

        $(".categories_checkbox:checkbox:checked").each(function(){
            categories.push($(this).val());
        });

        if(categories.length == 0){
            $(this).siblings(".category_error").hide().fadeIn(500).text("Смысл в том чтобы выбрать хоть одну категорию!");
            return false;
        }
        else{
            $(this).siblings(".category_error").hide();
            $(this).parent("form").submit();
        }

    });

    $("[name=feedback]").bind("click",function(){

        var message = $(this).siblings("[name=feedback_message]").val();

        if($("[name=email]").length == 1){

            var email = $(this).siblings("[name=email]").val();

            if(email.length == 0 ){

                $(".feedback_email_error").hide().fadeIn(500).text("вы забыли ввести email!");
                return false;
            }

            else{
                $(this).siblings(".feedback_email_error").hide();
            }

            var emailPattern = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;

            if(email.search(emailPattern) != 0){

                $(this).siblings(".feedback_email_error").hide().fadeIn(500).text("Вы что-то напутали,не может быть такого email адреса.");
                return false;
            }
        }

        if(message.length == 0){
            $(this).siblings(".feedback_message_error").hide().fadeIn(500).text("вы забыли ввести сообщение!");
            return false;
        }
        else{
            $(this).siblings(".feedback_message_error").hide();
        }

        if(message.length < 3){
            $(this).siblings(".feedback_message_error").hide().fadeIn(500).text("Слишком короткое сообщение!");
            return false;
        }

        else{
            $(this).siblings(".feedback_message_error").hide();
        }

        var rand_number = $("#rand_number").val();
        var number = 21 - rand_number;
        var captcha = $("#captcha").val();

        if(captcha != number){
            $(".captcha_error").hide().fadeIn(100).text("научись считать качок!!!");
        }

        else {
            $(".captcha_error").text('');
            $(this).parent("form").submit();
        }

    });

});