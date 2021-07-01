<?php

/**===================
    if else start
 =====================*/

$user_name = "admin";
if($user_name == "admin"){
    echo "login successfully";
}
echo "<br>";


$user_name = "admin";
if($user_name == "author"){
    echo "login successfully";
}else{
    echo "login failed";
}
echo "<br>";


$price = 6000;
if($price > 500){
    echo "price is so high";
}

 /**===================
    if else end
 =====================*/

?>