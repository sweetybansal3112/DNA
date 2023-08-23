<?php

//check for the connection
session_start();
$conn = mysqli_connect('localhost','root');
if($conn){
    echo "connection succesful";
}else{
    echo "not connected";
}
//connect database
mysqli_select_db($conn,'login');

//access username and password
$name= $_POST['user'];
$pass= $_POST['password'];

$q= " select * from signin where username = '$name' &&  password = '$pass' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username']= $name;
    header('location:login.html');
    
}else{
    header('location:login.html');
}

?>