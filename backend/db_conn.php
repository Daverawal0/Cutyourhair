<?php
//database connection
$mysqli= new mysqli("localhost","root", "", "barbershop");
if (mysqli_connect_error()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
