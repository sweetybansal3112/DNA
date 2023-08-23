<?php
if(isset($_POST['submit'])){
    header('location:feedback.html');
    $conn= mysqli_connect('localhost','root');
    if($conn){
        echo "connection succesful";
    }else{
        echo "not connected";
    }
    //connect database
    mysqli_select_db($conn,'login');

    $name = $_POST['fname'];
    $email = $_POST['fmail'];
    $msg = $_POST['fmsg'];

    $q = "insert into feedback(name,email,msg) values('$name','$email','$msg') " ;
    $result = mysqli_query($conn,$q);
    if($result){
        echo "feedback recieved successfully..";
    }
}
?>