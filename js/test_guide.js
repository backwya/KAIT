$(function(){
/* sub */
$(".sub_schedule").mouseenter(function(){
$(".sub_schedule ul").stop().fadeIn();
});
$(".sub_schedule").mouseleave(function(){
$(".sub_schedule ul").stop().fadeOut();
});
$(".sub_memo").mouseenter(function(){
$(".sub_memo ul").stop().fadeIn();
});
$(".sub_memo").mouseleave(function(){
$(".sub_memo ul").stop().fadeOut();
});

/* tab_test */
var material_name = $(".test_material h4");
var material = $(".test_material > div");
var memo_name = $(".test_memo h4");
var memo = $(".test_memo > div");
var idcard_name = $(".test_idcard h4");
var idcard = $(".test_idcard > div");
var cheating_name = $(".test_cheating h4");
var cheating = $(".test_cheating > div");
var disabled_name = $(".test_disabled h4");
var disabled = $(".test_disabled > div");
material_name.click(function(){
$(".tab_test h4").css('background','none');
material_name.css('background','#bce1ff');
memo.hide();
idcard.hide();
cheating.hide();
disabled.hide();
material.show();
});
memo_name.click(function(){
$(".tab_test h4").css('background','none');
memo_name.css('background','#bce1ff');
material.hide();
idcard.hide();
cheating.hide();
disabled.hide();
memo.show();
});
idcard_name.click(function(){
$(".tab_test h4").css('background','none');
idcard_name.css('background','#bce1ff');
material.hide();
memo.hide();
cheating.hide();
disabled.hide();
idcard.show();
});
cheating_name.click(function(){
$(".tab_test h4").css('background','none');
cheating_name.css('background','#bce1ff');
material.hide();
memo.hide();
idcard.hide();
disabled.hide();
cheating.show();
});
disabled_name.click(function(){
$(".tab_test h4").css('background','none');
disabled_name.css('background','#bce1ff');
material.hide();
memo.hide();
idcard.hide();
cheating.hide();
disabled.show();
});
});