<?php
  $page_title = "New Post";
  include('./includes/admin_header.php');
  include('./includes/admin_navbar.php');
?>

<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="page-header"> Posts </h1> 
    <div class="row">
      <div class="col-lg-12">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>category</label>
            <select  name="category_id" class="form-control" >
              <?php
                $sql = " SELECT * FROM `categories` ";
                $categories = mysqli_query($con , $sql);
                while( $row = mysqli_fetch_assoc($categories) ):
                  $id =$row['id'];
                  $name=$row['name']; 
              ?>
              <option value="<?=$id?>"> <?=$name?> </option>
              <?php endwhile; ?>
            </select>
          </div><!-- category -->
          
          <div class="form-group">
            <label>author</label>
            <input type="text" name="author" class="form-control">
          </div><!-- author -->

          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
          </div><!-- Title -->

          <div class="form-group">
            <label>image</label>
            <input type="file" name="image" class="form-control">
          </div><!-- image -->

          <div class="form-group">
            <label>content</label>
            <textarea name="content" class="form-control" rows="6"></textarea>
          </div><!-- content -->

          <div class="form-group">
            <label>tags</label>
            <input type="text" name="tags" class="form-control">
          </div><!-- tags -->

          <div class="form-group text-center">
            <button type="submit" name="add_post" class="btn btn-primary">Add post</button>
          </div><!-- NewPost -->
        </form>  
        <?php
          if(isset($_POST['add_post'])){
            $category_id = $_POST['category_id'];      
            $author = $_POST['author'];                 
            $title = $_POST['title'];                 
            $image_name =$_FILES['image']['name'];                 
            $image_temp=$_FILES['image']['tmp_name'];
            move_uploaded_file($image_temp,"../images/$image_name");
            $content = $_POST['content'];                 
            $tags = $_POST['tags'];                 
            $date = date('d-m-Y');
            $insertSql = "INSERT INTO `posts`(`category_id`, `author`, `title`, `image`, `content`, `tags`, `date`) 
            VALUES ('$category_id','$author','$title','$image_name','$content','$tags','$date') ";
            $insertPost = mysqli_query($con , $insertSql);
            header("Location:posts.php");
          }
        ?>
      </div>
    </div> <!-- /.row -->
  </div> <!-- /.container-fluid -->
</div>  <!-- /#page-wrapper -->

<?php 
  include('./includes/admin_footer.php');
?>