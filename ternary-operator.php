<?php
    $user = "";
    $age = 23;
    if( $age > 18 ){
        $user = "Admin";
    }else{
        $user = "Guest";
    }
    echo $user;


    /**===========================
     * ternary use start
     * =========================== */
    
    echo "<br>";
    $user = ($age < 18) ? "admin" : "Guest";
    echo $user;
     
    /**===========================
     * ternary use end
     * =========================== */

?>