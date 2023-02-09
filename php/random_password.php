<?php
$pattern = "GA0a!b1|cBdN@efg2hEi3jkD#IP4OmM%^JV\Q5RE_<q=SlK9rs6&tT*uUF,L-(vZ/7w~Wx+8yX>zY";

 $legth =  strlen($pattern)-1;
 $i;
  $password = [];
  for($i=0;$i<8;$i++)
  {
  	$password [] = $pattern[rand(0,$legth)];
  	 
  }
  echo implode($password);
   
 
?>