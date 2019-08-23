function conectarPhp ()
{
    $.ajax({
        url:"../models/testajax.php",
    type:'post',
    data: 'random',
    success:function (res){
        console.log (res);
        $("#slot1").append(res);

    }

    });
}
conectarPhp();