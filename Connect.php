<?php

$con=new mysqli('localhost', 'root', '', 'bodybuilding');

if(!$con){
    die(mysqli_error($con));
}
?>
