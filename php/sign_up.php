<?php
 require("database.php");
 $fullname = base64_decode($_POST["fullname"]);
 $username = base64_decode($_POST["username"]);
 $password = md5(base64_decode($_POST["password"]));
 $pattern = "GA0a!b1|cBdN@efg2hEi3jkD#IP4OmM%^JV\Q5RE_<q=SlK9rs6&tT*uUF,L-(vZ/7w~Wx+8yX>zY";
 $legth =  strlen($pattern)-1;
 $i; 
  $code = [];
  for($i=0;$i<6;$i++)
  {
  	$code[] =$pattern[rand(0,$legth)]; 
  } 
 $activation_code = implode($code); 
 $store_user = "INSERT INTO picdata(full_name,username,password,activation_code) 
                VALUES ('$fullname','$username','$password','$activation_code')";
         if($db->query($store_user))    
            {        
              $check_mail = mail($username,"picdrive activation code","Thank you for choosing our product your activation code is :
               ".$activation_code);
               if($check_mail == true)
               {
                echo "sending success";
               }
               else{
                echo "sending failed";
               }
            }
        else{
        	echo md5($fullname);
        }

?>