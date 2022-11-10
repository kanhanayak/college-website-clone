<?php

// database connection
$con=new mysqli("localhost","root","","college");
if($con->connect_error){
 die("something wrong in database connection..............Please Check.");
}

?>
