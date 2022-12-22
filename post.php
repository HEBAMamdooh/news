<?php
  $page_title = "Post Details";
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
          $category_id=$row['category_id'];                 
          $author=$row['author'];                 
          $status=$row['status'];                 
          $title=$row['title'];                 
          $image=$row['image'];                 
          $content=$row['content'];                 
          // $content= substr($row['content'] , 0 , 150) ;                 
          $tags=$row['tags'];                 
          $date=$row['date'];                 
          $comments_count=$row['comments_count'];                 
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
      <img class="img-fluid img-thumbnail" src="images/<?=$image?>" alt="">
      <hr>
      <!-- Post Content -->
      <p><?=$content?></p>
      <hr>
      <?php endwhile; ?>
      <!-- Blog Comments -->

      <!-- Comments Form -->
      <div class="card m-2">
        <h4 class=" p-2 ">Participate in the discussion of the article:</h4>
        <form role="form" method="post" >
          <div class="row m-2">
            <div class="col">
              <input type="text" class="form-control" name="user_name" placeholder="Your Name" aria-label="user_name">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="email" placeholder="Email" aria-label="email">
            </div>
          </div>
          <div class="col my-2 px-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Leave Your Comment" ></textarea>
          </div>
          <button type="submit" class="col btn btn-primary m-1" name="addComment" >Rebly</button>
        </form>
        <?php
            if(isset($_POST['addComment'])){
              $post_id = $_GET['pid'] ;     
              $user_name = $_POST['user_name'];
              $email = $_POST['email'];
              $message = $_POST['message'];
              $date = date("Y-m-d");
              $sql = " INSERT INTO `comments`(`post_id`, `user_name`, `email`, `message`, `date`) VALUES ('$post_id','$user_name','$email','$message','$date') ";
              $insertCategory = mysqli_query($con , $sql);
              // header("Location:post.php/$pid");
            }
        ?>
      </div>

      <hr>

      <!-- Posted Comments -->

      <!-- Comment -->
      <?php
        $pid = $_GET['pid'] ;
        $sql = " SELECT * FROM `comments` WHERE `post_id` = '$pid' ";
        $comments = mysqli_query($con , $sql);
        $i=0;
        while( $row = mysqli_fetch_assoc($comments) ):
          $id =$row['id'];
          $post_id=$row['post_id'];                 
          $user_name=$row['user_name'];                 
          $email=$row['email'];                 
          $message=$row['message'];                 
          $date=$row['date'];           
          $i++;              
      ?>
      <figure>
        <blockquote class="blockquote">
          <p><?=$message?></p>
        </blockquote>
        <figcaption class="blockquote-footer"> 
          written by <strong><?=$user_name?></strong>  in <small><cite title="Source Title"><?=$date?></cite></small> 
        </figcaption>
      </figure>
      <?php endwhile;
        $pid = $_GET['pid'] ;
        $updatePost = " UPDATE `posts` SET `comments_count`='$i' WHERE `id` = '$pid'; ";
        $updat_comments_count = mysqli_query($con , $updatePost);
      ?>

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
