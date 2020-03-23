$(function(){
   $(".check_edit_btn").click(function(){
      var check_pwd = $("#check_pwd");
       var regex_pwd = RegExp(/^[A-Za-z0-9]{6,12}$/); 
       if(!check_pwd.val()){
           alert("비밀번호 값을 입력해주세요 :D");
           check_pwd.focus();
           return false;
       }
       if(!regex_pwd.test(check_pwd.val())){
           alert("비밀번호는 숫자, 문자 포함 6~12 자리 입니다 :D");
           check_pwd.focus();
           return false;
       }
       $("#check_edit_form").submit();
   });
});