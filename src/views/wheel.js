function conectarPhp ()
{
    $.ajax({
        url:"../models/testajax.php",
    type:'post',
    data: 'random',
    success:function (res){
         
        $("#slot1").html(res); 
        $("#slot2").html(res);
        $("#slot3").html(res); 
        $("#profile").html(res);   

       /*  $("#slot2").append(res);
        $("#slot3").append(res);
        $("#profile").append(res); */

    }

    });
}

function changeAllStatusOfUserToZero()
{
    $.ajax({
        url:"../models/resetAjax.php",
        type:'post',
        data:'random',
        success:function(){
            $content = " ";
            $("#slot1").html($content); 
           $("#slot2").html($content); 
            $("#slot3").html($content); 
           $("#profile").html($content); 
 
        }
    }
    );
}