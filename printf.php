<?php
/*==============================
print: using echo function start
===============================*/
    $name = "Fatima";
    echo "Hello $name";
    echo "<br>";
/*============================
print: using echo function end
============================*/




/*==============================
print: using printf function start
===============================*/
$user_name = "Asha Afrin";
printf ("Hello $user_name");
/*==============================
print: using printf function end
==============================*/




/*===========================================
string 1st letter capital using ucwords start
============================================*/
echo "<br>";
$name = "welcome bangladesh";
$new_name = ucwords($name);
echo "Hello $new_name";


/*-------variable reuse------*/
echo "<br>";
$name = "welcome bangladesh wel";
$name = ucwords($name);
echo "Hello $name";
/*-----------------*/

echo "<br>";
$your_name = "welcome bangladesh welcome bangladesh";
echo "hello" .ucwords($your_name);
/*==========================================
string 1st letter capital using ucwords end
===========================================*/





/*==========================================
string 1st letter capital using printf start
===========================================*/
echo "<br>";
$admin_name = "ayesha rahima";
$university_name = "dhaka international university";
printf ("hello %s welcome my university %s", $admin_name, $university_name);


echo "<br>";
$admin_name = "ayesha rahima";
$university_name = "dhaka international university";
$school_name = "horipod public school";
printf ("hello %s welcome my university %s",
 ucwords($admin_name), ucwords($university_name), ucwords($school_name));
/*==========================================
string 1st letter capital using printf end
===========================================*/


/*===========================
show int type data using printf end
=============================*/
echo "<br>";
$number = 19;
$price = 250;
printf("This number is: %d this price is: %d", $number, $price);
/*===========================
show int type data using printf end
=============================*/



/*===========================
show float type data using end
=============================*/
echo "<br>";
$number = 10.03;
$price = 25.5;
printf("This number is: %f this price is: %f", $number, $price);
/*===========================
show float type data using end
=============================*/


/*===========================
ascii value start 
=============================*/
echo "<br>";
$ascii = 65;
printf("Amount: %c", $ascii);
/*===========================
ascii value end
=============================*/


/*===========================
numeric  value to binary start 
=============================*/
echo "<br>";
$numeric = 10;
printf("binary: %b", $numeric);
/*===========================
numeric value to binary end
=============================*/



/*===========================
    int to octal start 
=============================*/
echo "<br>";
$numeric = 10;
printf("Octal Number: %o", $numeric);
/*===========================
    int to octal end
=============================*/



/*===========================
    int to c start 
=============================*/
echo "<br>";
$numeric = 10;
printf("Hexadecimal Number: %x", $numeric);
/*===========================
    int to hexadecimal end
=============================*/


/*===========================
    int to hexadecimal start 
=============================*/
echo "<br>";
$int_number = 10;
$int_number2 = 20;
printf("First Number: %d  Second int number: %d", $int_number, $int_number2);
/*===========================
    int to hexadecimal end
=============================*/

/*===========================
output float 2digit start 
=============================*/
echo "<br>";
$amount = 10.23;
printf("Amount is: %.2f", $amount);


echo "<br>";
$amount = 10.236565;
printf("Amount is: %.0f", $amount);
/*===========================
output float 2digit end 
=============================*/
?>