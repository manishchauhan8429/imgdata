 $(document).ready(function(){
 	 $(".generate-btn").click(function(e){
 	 	e.preventDefault();
 	 	$("#password").attr("type","text");
 	 	$(".show-icon").css({color:"black"});
 	 	$.ajax({
 	 		type :"post",
 	 		url : "php/random_password.php",
 	 		beforeSend:function(){
 	 			$(".show-icon").removeClass("fa fa-eye");
 	 			$(".show-icon").addClass("fa fa-circle-o-notch fa-spin");
 	 			$(".show-icon").css({color:"black"});
 	 		 },
 	 		success : function(reply){	 			
				$(".show-icon").removeClass("fa fa-circle-o-notch fa-spin");
				$(".show-icon").addClass("fa fa-eye");
				$("#password").val(reply);
 	 		 }
 	 		});
 	 	});
 	 	 
 	 });
