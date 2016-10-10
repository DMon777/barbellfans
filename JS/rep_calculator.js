$(document).ready(function(){

   $("#count_jim").bind('click',function(){

       var weight = $("[name=weight_jim]").val();

       if(weight.length == 0){
           alert("Вы не ввели вес,будте повнимательнее!");
           return false;
       }

       if(!$.isNumeric(weight)){
           alert("Вы ввели не числовое значение,не балуйтесь!");
           return false;
       }

       var quantity_rep = $("[name=quantity_jim]").val();
       var result;

       switch(quantity_rep) {
           case '1':
              result = weight*1;
               break;
           case '2':
             result = weight*1.035;
               break;
           case '3':
                result = weight*1.08;
               break;
           case '4':
                result = weight*1.115;
               break;
           case '5':
                result = weight*1.15;
               break;
           case '6':
                result = weight*1.18;
               break;
           case '7':
                result = weight*1.22;
               break;
           case '8':
                result = weight*1.255;
               break;
           case '9':
                result = weight*1.29;
               break;
           case '10':
                result = weight*1.325;
               break;
       }

       if(result > 487.6){
           alert("Ура!!!Вы побили мировой рекорд,поздравляю :)");
           return false;
       }

       $("#result_jim").text(result+" кг");
   });


    $("#count_squats").bind('click',function(){

        var weight = $("[name=weight_squats]").val();

        if(weight.length == 0){
            alert("Вы не ввели вес,будте повнимательнее!");
            return false;
        }

        if(!$.isNumeric(weight)){
            alert("Вы ввели не числовое значение,не балуйтесь!");
            return false;
        }

        var quantity_rep = $("[name=quantity_squats]").val();
        var result;

        switch(quantity_rep) {
            case '1':
                result = weight*1;
                break;
            case '2':
                result = weight*1.0475;
                break;
            case '3':
                result = weight*1.13;
                break;
            case '4':
                result = weight*1.5775;
                break;
            case '5':
                result = weight*1.2;
                break;
            case '6':
                result = weight*1.242;
                break;
            case '7':
                result = weight*1.284;
                break;
            case '8':
                result = weight*1.326;
                break;
            case '9':
                result = weight*1.368;
                break;
            case '10':
                result = weight*1.41;
                break;
        }

        if(result > 500){
            alert("Ура!!!Вы побили мировой рекорд,поздравляю :)");
            return false;
        }

        $("#result_squats").text(result+" кг");
    });

    $("#count_lift").bind('click',function(){

        var weight = $("[name=weight_lift]").val();

        if(weight.length == 0){
            alert("Вы не ввели вес,будте повнимательнее!");
            return false;
        }

        if(!$.isNumeric(weight)){
            alert("Вы ввели не числовое значение,не балуйтесь!");
            return false;
        }

        var quantity_rep = $("[name=quantity_lift]").val();
        var result;

        switch(quantity_rep) {
            case '1':
                result = weight*1;
                break;
            case '2':
                result = weight*1.065;
                break;
            case '3':
                result = weight*1.13;
                break;
            case '4':
                result = weight*1.147;
                break;
            case '5':
                result = weight*1.164;
                break;
            case '6':
                result = weight*1.181;
                break;
            case '7':
                result = weight*1.198;
                break;
            case '8':
                result = weight*1.223;
                break;
            case '9':
                result = weight*1.232;
                break;
            case '10':
                result = weight*1.24;
                break;
        }

        if(result > 500){
            alert("Ура!!!Вы побили мировой рекорд,поздравляю :)");
            return false;
        }

        $("#result_lift").text(result+" кг");
    });



});
