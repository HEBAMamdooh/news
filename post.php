<?php
  include('./inc/header.php');
  include('./inc/navbar.php');
?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Blog Post Content Column -->
    <div class="col-lg-8">
      <!-- Blog Post -->
      <?php
        $pid = $_GET['pid'] ;
        $sql = " SELECT * FROM `posts` WHERE `id` = '$pid' ";
        $posts = mysqli_query($con , $sql);
        while( $row = mysqli_fetch_assoc($posts) ):
          $id =$row['id'];
          $title=$row['title'];                 
          $author=$row['author'];                 
          $date=$row['date'];                 
          $image=$row['image'];                 
          $content=$row['content'];                 
          // $content= substr($row['content'] , 0 , 150) ;                 
          $tags=$row['tags'];                 
          $comments=$row['comments'];                 
          $category=$row['category'];                 
      ?> 
      <!-- Title -->
      <h1><?=$title?></h1>
      <!-- Author -->
      <p class="lead">  by <a href="#"><?=$author?></a> </p>
      <hr>
      <!-- Date/Time -->
      <p><span class="glyphicon glyphicon-time"></span> Posted on<?=$date?></p>
      <hr>
      <!-- Preview Image -->
      <img class="img-responsive" src="images/<?=$image?>" alt="">
      <hr>
      <!-- Post Content -->
      <p><?=$content?></p>
      <hr>
      <?php endwhile; ?>
      <!-- Blog Comments -->

      <!-- Comments Form -->
      <div class="well">
          <h4>Leave a Comment:</h4>
          
          <?php
              if(isset($_POST['addComment'])){
                  $message = $_POST['message'];
                  $post = $_POST["$pid"];      
                  $date = date('d-m-Y');

                  $sql = " INSERT INTO `comments`(`message`, `post_id`, `data`) VALUES ('$message','$post','$date') ";
                  
                  $insertCategory = mysqli_query($con , $sql);
                  // header("Location:post.php/$pid");
              }
          ?>
          <form role="form" method="post" >
              <div class="form-group">
                  <textarea class="form-control" name="message" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="addComment" >Submit</button>
          </form>

      </div>

      <hr>

      <!-- Posted Comments -->

      <!-- Comment -->
      <div class="media">
          <a class="pull-left" href="#">
              <img class="media-object" src="./images/about.jpg" alt="">
          </a>
          <div class="media-body">
              <h4 class="media-heading">Start Bootstrap
                  <small>August 25, 2014 at 9:30 PM</small>
              </h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
      </div>

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <?php 
      include('./inc/sidebar.php');
    ?>
  </div> <!-- row -->
  <hr>
  <!-- Footer -->
<?php 
  include('./inc/footer.php');
?>
