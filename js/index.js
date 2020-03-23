$(function(){
/* banner */
$("#all_wrap").stop().animate({top:100},"slow");
$(".banner_close_wrap a").click(function(){
$("#all_wrap").stop().animate({top:0});
});

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
// 마이페이지
$(".user_mypage").click(function(){
$(".user_mypage_non_members").stop().fadeIn();
});
$(".user_mypage, .user_mypage_non_members").mouseleave(function(){
$(".user_mypage_non_members").stop().fadeOut();
});
$(".user_mypage").click(function(){
$(".user_mypage_members").stop().fadeIn();
});
$(".user_mypage, .user_mypage_members").mouseleave(function(){
$(".user_mypage_members").stop().fadeOut();
});
// 전체메뉴
$(".user_allmenu").click(function(){
$(".user_allmenu_wrap").stop().fadeIn();
});
$(".user_allmenu_wrap").mouseleave(function(){
$(this).stop().fadeOut();
});
/* main_ad_content */
$("#main_slider").bxSlider({
mode: 'fade',
speed: 1000,
pager: false,
moveSlides: 1,
auto: true,
autoHover: true,
autoControls: true,
});
$(".bx-start").hide();
$(".bx-stop").click(function(){
	$(".bx-stop").hide();
	$(".bx-start").show();
});
$(".bx-start").click(function(){
	$(".bx-start").hide();
	$(".bx-stop").show();
});

/* footer */
$(".scroll_top").click(function(){
$("html, body").animate({scrollTop : 0}, 400);
return false;
});
$(".footer_family_site > h3, .footer_family_site_more").click(function(){
$(".footer_family_site ul").stop().toggle();
});

// 모바일
if($(window).width() < 767){
    /* 모바일 배너 */
$(".mobile_wrap").stop().css("top", "60");
$(".banner_del").click(function(){
$(".mobile_wrap").stop().css("top", "0");
});
    // 모바일 메인 메뉴
$("#gnb h2").click(function(){
   $("#gnb > ul").fadeToggle(); 
});
$("#gnb > ul > li > a").click(function(){
    $(this).parent().children("ul").slideToggle();
});
    // 모바일 마이페이지
   $(".user_my_page h2").click(function(){
       $(".user_mypage_wrap").fadeToggle();
   });
}
});