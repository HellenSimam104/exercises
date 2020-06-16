<?php
#function printy(){

#}
/**
 Saves the submitted form data into a cookie
*/
function saveInCookie($new){

  $cookie = $_COOKIE['greeter']; //associativ array
  /*
  [
   'greater' =>"["
   [" 'example',43,'male'"]"
   ---
   ]"
  ]
  */
  if(isset($cookie)){#if it is defined

    $greeters = getCookieAsArray($cookie);//appends data

    array_push($greeters,$new);

  }else{//adds new
    $greeters = array(
      $new
    );
  }

  //convert array into a string--json(data exchange)
  $json = json_encode($greeters);

  //save cookie
  setcookie('greeter', $json);

}
/**
  Get the saved cookie as an array
*/
function getCookieAsArray($cookie){
  var_dump($cookie);
  die();

  $cookie = stripslashes($cookie);//removes backlashes added by addslashes function
  return json_decode($cookie, true);//convert string into array
}
saveInCookie(['Hellen'21,'female'])
getCookieAsArray($_COOKIE['greeter'])
