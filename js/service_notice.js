/*
// 페이저
var total_data = 30;
var page_list = 10;
var page_block = 5;

function paging(total_data, page_list, page_block, page_current){
	var page_total = Math.ceil(total_data/page_list);
	var page_group = Math.ceil(page_current/page_block);
	var page_end = page_group * page_block;
	if(page_end > page_total){
		page_end = page_total;
	}
	var page_start = page_end - (page_block - 1);
	var page_next = page_end + 1;
	var page_prev = page_start - 1;
	
	var page_view = $(".notice_pager");
	var html = "";
	if(page_prev > 0){
		html += "<a href='#none' class='pager_prev'>이전</a>";
	}
	html += "<ul>";
	for(var l = page_start; l <= page_end; l++){
		html += "<li><a href='#none' class='pager_no'>"+l+"</a></li>";
	}
	html += "</ul>";
	if(page_end < page_total){
		html += "<a href='#none' class='pager_next'>다음</a>"
	}
	$(page_view).html(html);
	$(".notice_pager a"+page_current).css("color","#fff","backgroud","#55616e");
	$(".notice_pager a").click(function(){
		var item = $(this);
		var id = item.attr("class");
		var page_select = item.text();
		if(id == "pager_prev"){
			page_select = page_prev;
		}
		if(id == "pager_next"){
			page_select = page_next;
		}
		paging(total_data, page_list, page_block, page_select);
	});
}
$(function(){
var total_data = 30;
var page_list = 10;
var page_block = 5;
	paging(total_data, page_list, page_block, 1);
});*/
function search_notice(){
  var search_word = document.getElementById("search_word");
if(!search_word.value){
    alert("검색값을 입력해주세요 :)");
    search_word.focus();
    return false;
}
    document.notice_search_form.submit();
};