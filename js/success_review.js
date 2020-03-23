function search_review(){
  var search_word = document.getElementById("search_word");
if(!search_word.value){
    alert("검색값을 입력해주세요 :)");
    search_word.focus();
    return false;
}
    document.review_search_form.submit();
};