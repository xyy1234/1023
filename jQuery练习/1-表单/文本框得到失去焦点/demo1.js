/**
 * Created by Administrator on 2017/2/7.
 */
$(function(){
$(":input").focus(function(){//$("input, textarea")
 $(this).addClass("focus");
}).blur(function(){
    $(this).removeClass("focus");
})
})