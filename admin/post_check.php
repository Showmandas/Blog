<?php
include 'include/header.php';

if(isset($_POST['publish'])){
    $data=mysqli_real_escape_string($con,$_POST['ckeditor']);
    $data=htmlentities($data);
    $title=mysqli_real_escape_string($con,$_POST['title']);
    $title=htmlentities($title);
  
    $sql="insert into blogpost(title,content) values('$title','$data')";
    $res=mysqli_query($con,$sql);
    if($res){
        $_SESSION['message']="<div class='chip green white-text'>Post is published</div>";
        header("Location: write.php");
    }else{
        $_SESSION['message']="<div class='chip red black-text'>Sorry!Something went wrong</div>";
        header("Location: write.php");
    }
}

?>

