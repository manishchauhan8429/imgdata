<?php
  require("database.php"); 
  $username = base64_decode($_POST["username"]);
  $password = md5(base64_decode($_POST["password"]));
  $check_username = "SELECT username FROM picdata WHERE username = '$username'";
  $response = $db->query($check_username);
    if($response->num_rows != 0 )
    {
      $check_password = "SELECT username,password FROM picdata WHERE username='$username' AND password='$password'";
      $response_password = $db->query($check_password);
      if($response_password->num_rows !=0)
          {     	   
            $check_status = "SELECT status FROM picdata WHERE username='$username' AND password='$password' AND status='active'";
            $response_status = $db->query($check_status);
            if($response_status->num_rows != 0)  
              {             
                echo "login success";
              }
            else
              {
                $get_code = "SELECT activation_code FROM picdata WHERE username = '$username' AND password = '$password'";
                $response_get_code = $db->query($get_code);
                $data = $response_get_code->fetch_assoc();
                $final_code = $data['activation_code'];
                $check_code_mail = mail($username,"picdrive activation code","Thank you for choosing our product activation code is:".$final_code);
                if($check_code_mail == "ture"){                
                echo "login pending";
                }
              }
          }
        else  
          {    	 
            echo "wrong password";
          }
    }
    else  
    { 
      echo "user not found";
    }
?>