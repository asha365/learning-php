<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $name ="Asha Afrin";
    $price = 1000;
    $total_amount = 1000;

    echo "Hello $name  Your Current Amount is: $total_amount";
        
 ?>


<?php
    $first_name ="Asha Afrin";
    $current_job = "developer";

    echo "Hello $first_name,  Your Current job is: $current_job";
        
 ?>


<?php
    $first_name ="Asha Afrin";
    $current_job = "developer";
?>
    <h1>Hello <?php echo $first_name;  ?> Your Current job is: <?php echo $current_job; ?></h1>  
 
</body>
</html>