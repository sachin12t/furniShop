<?php
$con=mysqli_connect("localhost","root",'',"product");
if(!$con){
    die("connection is not established").mysqli_error($con);
}