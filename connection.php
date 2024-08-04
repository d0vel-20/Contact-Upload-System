<?php
$con = new mysqli('localhost', 'root', '', 'contact upload');

if(!$con){
    die(mysqli_error($con));
}

?>