 $(document).ready(function(){
 	$(".activate-btn").click(function(){
 		var code =  $("#code").val();
 		var username = $("#email").val();
 		$.ajax({
 			type : "POST",
 			url  : "php/activator.php",
 			data : {
 				code : code,
 				username : username
 			   },
 			beforesend : function(){
 				$(".activate-btn").html("Please wait we are checking...");
 			   },
 			success: function(response){
 				 	if(response.trim() == "user verified")
						{
						 window.location = "profile/profile.php";
						}
                    elseif(response.trim() = "Wrong activation code") 
					      {						                               		 
							$(".login-activate-btn").html("Activate now");
							$(".login-activate-btn").removeAttr("disabled");
							$(".login-code").val("");
							var notice = document.createElement("DIV");
							notice.className = "alert alert-warning";
							notice.innerHTML = "<b> Wrong activation code</br>";
							$(".login-notice").append(notice);
							setTimeout(function(){
								$(".login-notice").html("");
							},5000);
                	    }
 			}
 		});
 	});
 });