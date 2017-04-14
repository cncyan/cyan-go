/**
 * Created by cyan on 2017-03-29.
 */
$(function(){
    navfix();
    showfont();
});
function navfix(){
    $(window).scroll(function(){
        var top=$(window).scrollTop();
        if(top>=80){
            $(".main_nav").addClass("fix");
            $(".main_nav").css({top:0});
        }else{
            $(".main_nav").removeClass("fix");}
    });
}
function showfont(){
    var ap=$(".main_pic").find("p");
    ap.hide();
    ap.each(function(){
        $(this).fadeIn(1000,function(){
            console.log( $(this).next());
            $(this).next().fadeIn(60000);
        });
    });
}
