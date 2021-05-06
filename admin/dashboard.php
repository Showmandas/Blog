<?php
// include 'include/header.php';
include 'include/navbar.php';
if(isset($_SESSION['username']))
{
?>
        <div class="main">
        <div class="row">
        <div class="col l6 m6 s12">
        <ul class="collection with-header">
        <li class="collection-header #ab47bc purple lighten-2">
        <h5 class="white-text">Recent posts</h5>
        </li>
        <?php
        $sql="select * from blogpost order by id desc";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)>0)
        {
          while($row=mysqli_fetch_assoc($res))
          {
        
        ?>
        <li class="collection-item">
        <a href="#"><?php echo $row['title']; ?></a>
        <br>
        <span><a href="#"><i class="material-icons tiny">edit</i></a> | <a href="#"><i class="material-icons tiny red-text">clear</i></a> | <a href="#"><i class="material-icons tiny green-text">share</i></a></span>
        </li>
         <?php
          }
        }
         ?>
        
        </ul>
        </div><!--/col-->

        </div><!--/row-->
        </div><!---/main-->

<div class="fixed-action-btn">
<a href="#" class="btn-floating btn btn-large white-text">
<i class="material-icons">edit</i>
</a>
</div><!--/fixedbtn-->
<?php
}else{
  $_SESSION['message']="<div class='chip close red black-text'>Log in to continue</div>";
  header('Location:login.php');
}
?>