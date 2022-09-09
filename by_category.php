<?php
  $page_title = "News";
  include('./inc/header.php');
  include('./inc/navbar.php');
?>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Blog Entries Column -->
    <div class="col-md-8">
      <h1 class="page-header">  WIND  <small>News</small>  </h1>

      <?php
        $cid = $_GET['cid']; 
        $sql = " SELECT * FROM `posts` WHERE `category` = '$cid' ";
        $posts = mysqli_query($con , $sql);
        while( $row = mysqli_fetch_assoc($posts) ):
          $id =$row['id'];
          $title=$row['title'];                 
          $author=$row['author'];                 
          $date=$row['date'];                 
          $image=$row['image'];                 
          // $content=$row['content'];                 
          $content= substr($row['content'] , 0 , 150) ;                 
          $tags=$row['tags'];                 
          $comments=$row['comments'];                 
          $category=$row['category'];                 
      ?>

      <!-- Blog Post -->
      <h2> <a href="post.php?pid=<?=$id?>"><?=$title?></a></h2>
      <p class="lead"> by <a href="index.php"><?=$author?></a></p>
      <p> <span class="glyphicon glyphicon-time"></span> Posted on <?=$date?> </p>
      <hr>
      <img class="img-responsive" src="images/<?=$image?>" alt="">
      <hr>
      <p><?=$content?></p>
      <a class="btn btn-primary" href="post.php?pid=<?=$id?>"> Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
      <hr>
      <?php endwhile; ?>
    </div>

    <!-- Blog Sidebar Widgets Column -->
      <?php   
        include('./inc/sidebar.php');
      ?>
  </div> <!-- /.row -->
  <hr>

<?php 
  include('./inc/footer.php');
?>