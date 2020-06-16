<?php

/*
rETURN DOC_STRINGS -return documentation string
* @param $name
* @param $age

*/
function nameAgeReturner($name,$age,$greetMe=false){
//echo $name." " .$age ;
if($greetMe){
  return 'Hi'.$name.' '.$age;
}
else{
    return $name.' '.$age;
}

//Shorthand if
  // code...
//return($greetMe)? 'Hi'.$name.
}

 //execution of functions- finctions are only executed when they are called
 // called by name
 # By name
 $Nage=nameAgeReturner('Simam',21);
 echo "<br/>"
 var_dump($Nage);
 ?>
