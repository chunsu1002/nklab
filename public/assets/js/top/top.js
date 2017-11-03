$(function() {
//    $(".mid_price").text(bitblyer_controller);
    //1秒ごとの最新を取りに行く
//    setInterval(function(){
        //価格get
        $.ajax({
            url:bitblyer_controller,
            type:'GET',
            dataType : "json",
            success : function(data){
                console.log(data.mid_price);
                $(".mid_price").text(data.mid_price);
            }
        });
//    },1000);
});