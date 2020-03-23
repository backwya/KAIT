$(function(){
/* logout */
$(".logout").click(function(){
var log_out = confirm("로그아웃 하시겠습니까? :D");
if(log_out){
location.href="php/login/logout.php";
}
});

/* gnb */
// 메인 메뉴
$(".main_menu > ul > li, .sub_bg").mouseenter(function(){
$(".main_menu ul ul, .sub_bg").stop().fadeIn();
$(".sub_bg span").stop().fadeIn();
});
$(".main_menu > ul > li, .sub_bg").mouseleave(function(){
$(".main_menu ul ul, .sub_bg").stop().fadeOut();
$(".sub_bg span").stop().fadeOut();
});
// 마이페이지, 전체메뉴
$(".user_mypage").click(function(){
$(".user_mypage_non_members").stop().fadeIn();
});
$(".user_mypage, .user_mypage_non_members").mouseleave(function(){
$(".user_mypage_non_members").stop().fadeOut();
});
$(".user_mypage, .user_mypage_members").mouseleave(function(){
$(".user_mypage_members").stop().fadeOut();
});
$(".user_mypage").click(function(){
$(".user_mypage_members").stop().fadeIn();
});
$(".user_mypage, .user_mypage_members").mouseleave(function(){
$(".user_mypage_members").stop().fadeOut();
});
$(".user_allmenu").click(function(){
$(".user_allmenu_wrap").stop().fadeIn();
});
$(".user_allmenu_wrap").mouseleave(function(){
$(this).stop().fadeOut();
});

/* main_bg */
/*$(".navi_bg").mouseenter(function(){
$(".navi_bg").stop().animate({opacity:0.5});
$(".main > section > h2").css("color", "#222");
$(".navi a").css("color", "#222");
});
$(".navi_bg").mouseleave(function(){
$(".navi_bg").stop().animate({opacity:1});
$(".main > section > h2").css("color", "#fff");
$(".navi a").css("color", "#fff");
});*/

/* footer */
// 위로가기
/*$(window).scroll(function(){
if($(this).scrollTop() > 200){
$(".scroll_top").fadeIn();
} else {
$(".scroll_top").fadeOut();
}
});*/
$(".scroll_top").click(function(){
$("html, body").animate({scrollTop : 0}, 400);
return false;
});
// 패밀리 사이트
$(".footer_family_site > h3, footer_family_site_more").click(function(){
$(".footer_family_site ul").stop().toggle();
});
});