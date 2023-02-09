$(document).ready(function(){
	 $(".submit-btn").click(function(e){
	 	e.preventDefault();
	 	$.ajax({
	 		type : "POST",
	 		url : "php/sign_up.php",
	 		data : {
	 			fullname : btoa($("#fullname").val()),
	 			username : btoa($("#email").val()),
	 			password : btoa($("#password").val())
	 		},
	 		beforeSend : function(){
	 			$(".submit-btn").html("processing please wait..");
	 			$(".submit-btn").attr("disabled","disabled");
	 		},
	 		success : function(reply){
	 			 if(reply == "sending success")
	 			 {
	 			 	$("#signup-form").fadeOut(500,function(){
	 			 		$(".activator").removeClass("d-none")
	 			 	});
	 			 }
	 			 else{
					  alert(reply);
	 			 	var massage = document.createElement("DIV");
	 			 	massage.className = "alert alert-warning";
	 			 	massage.innerHTML = "<b>Something went wrong please try again later</b>";
	 			 	$(".signup-notice").append(massage);
	 			 	$(".submit-btn").html("Register now");
	 			 	$("form").trigger('reset');
	 			 	$(".email-loader").addClass("d-none");
	 			 	setTimeout(function(){
	 			 			$(".signup-notice").html("")
	 			 	},2000)
	 			 }
	 		}
	 	});

	 });
});