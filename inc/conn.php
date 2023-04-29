<?php

$conn = mysqli_connect('localhost','root','','pp');
if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}