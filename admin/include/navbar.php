<?php
include 'include/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
       <!-- Compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
       <style>
       footer,header,.main{
           padding-left:300px;
       }
       @media(max-width:992px){
           footer,header,.main{
               padding-left:0px;
           }
       }
       </style>
</head>
<body>
<nav class="#ab47bc purple lighten-1">
    <div class="nav-wrapper">
    <div class="container">
    <a href="#" class="brand-logo center">Logo</a>
    <a href="#" data-target="slide-out" class="sidenav-trigger left show-on-large"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down right">
        <li><a href="">Home</a></li>
        <li><a href="">Contact us</a></li>
        <li><a href="">About us</a></li>
      </ul>
    </div><!--/container-->
     
    </div>
  </nav>
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
      <div class="background">
        <img src="../images/pic-2.webp">
      </div>
      <a href="#user"><img class="circle" src="../images/mypic.jpg"></a>
      <a href="#name"><span class="white-text name"><?php echo $_SESSION['username'] ?></span></a>
      <a href="#email"><span class="white-text email">
      <?php
      $user=$_SESSION['username'];
      $sql="select email from users where username='$user'";
      $res=mysqli_query($con,$sql);
      $row=mysqli_fetch_assoc($res);
      echo $row['email'];
      ?>
      </span></a>
    </div></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Posts</a></li>
    <li><a href="#">Images</a></li>
    <li><a href="#">Comments</a></li>
    <li><a href="#">Setting</a></li>
    
    <li><div class="divider"></div></li>
    <li><a href="#">Logout</a></li>
  </ul>
  