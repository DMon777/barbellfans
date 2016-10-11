$(document).ready(function(){

    $("#registration_submit").bind("click",function(){

        var login = $("#login").val();
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        var email = $("#email").val();
        var captcha = $("#captcha").val();

         if($(".login_error").html().length > 0 ||
            $(".password_error").html().length > 0 ||
            $(".confirm_password_error").html().length > 0 ||
            $(".email_error").html().length > 0 ||
            $(".captcha_error").html().length > 0 ){
            $("#registration_submit").attr('type','button');
            return false;
        }

         else if(login.length < 1 || password.length < 1 || confirm_password.length < 1 || email.length < 1 || captcha.length < 1){
            $("#registration_submit").attr('type','button');
            return false;
        }

        else{
            $("#registration_submit").attr('type','submit');
            return true;
        }
    });

    function check_login(login){

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
    }

    function check_email(email){
        $.ajax({
            url:'ajax/method/validate_email',
            type:'post',
            data:{email:email},
            success:function(result){
                if(result.length > 0){
                    $(".email_error").hide().fadeIn(100).text(result);
                }
                else{
                    $(".email_error").text('');

                    return true;
                }
            }
        });
    }

    function check_password(password){
        if(password.length < 5 ){
            $(".password_error").hide().fadeIn(100).text("пароль дожден быть длиннее 5-ти символов");
        }
        else{
            $(".password_error").text("");
        }
    }

    function check_confirm_password(confirm_password){
        var password = $("#password").val();

        if(confirm_password != password){
            $(".confirm_password_error").hide().fadeIn(100).text("пароли не совпадают!!!");

        }
        else{
            $(".confirm_password_error").text("");
        }
    }

    function check_captcha(captcha){

        var rand_number = $("#rand_number").val();
        var number = 21 - rand_number;

        if(captcha != number){
            $(".captcha_error").hide().fadeIn(100).text("научись считать качок!!!");
        }

        else{
            $(".captcha_error").text('');
        }
    }

    $("#login").bind('change',function(){
        check_login($("#login").val());
    });

    $("#email").bind('change',function(){
        check_email($(this).val());
    });

    $("#captcha").bind('change',function(){
        check_captcha($(this).val());
    });

    $("#confirm_password").bind('change',function(){
        check_confirm_password($(this).val());
    });

    $("#password").bind('change',function(){
        check_password($(this).val());
    });

});