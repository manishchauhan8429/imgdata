$(document).ready(function(){
	$(".show-icon").click(function(){
		 var check = $("#password").attr("type");

		 if(check == "password")
		 {

         $("#password").attr("type","text");
     }
     else{
     	$("#password").attr("type","password");
     }
	});
});