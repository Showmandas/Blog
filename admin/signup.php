<?php
include 'include/header.php';
if(isset($_POST['signup'])){
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $email=htmlentities($_POST['email']);
    $username=htmlentities($_POST['username']);
    $password=htmlentities($_POST['password']);
    $password=password_hash($password,PASSWORD_BCRYPT);
    $sel="select * from users where email='$email' or username='$username'";
    $resl=mysqli_query($con,$sel);
    if(mysqli_num_rows($resl)){
        header('Location: login.php');
        $_SESSION['message']="<div class='chip red black-text'>Account Already Exists,Please login to continue.</div>";
         
    }else{
        $insertq="insert into users(email,username,password) values('$email','$username','$password')";
        $res=mysqli_query($con,$insertq);
        if($res){
       header('Location: login.php');
       $_SESSION['message']="<div class='chip green white-text'>you have successfully registerd,,now login to continue</div>";
        }else{
            header('Location: login.php');
            $_SESSION['mesg']="Sorry something went wrong";
                 
        }  

    }
  

}

?>