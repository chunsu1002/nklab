$(function() {

    //1秒ごとの最新を取りに行く
    setInterval(function(){
        //価格get
        $.ajax({
            url:bitblyer_controller,
            type:'GET',
            dataType : "json",
            success : function(data){
//                console.log(data.ltp);
                $(".ltp").text(data.ltp);
            }
        });
    },1000);
});