<?php
  $page_title = "Posts";
  include('./includes/admin_header.php');
  include('./includes/admin_navbar.php');
?>

<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="page-header"> Posts </h1> 
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-bordered table-hover  table-striped">
          <thead>
            <tr class="text-center">
              <th>ID</th>
              <th>Title</th>
              <th>author</th>
              <th>date</th>
              <th>image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = " SELECT * FROM `posts` ";
              $posts = mysqli_query($con , $sql);
              $i=0;
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
                $i++;                
            ?> 
            <tr class="text-center">
              <td><?=$i?></td>
              <td><?=$title?></td>
              <td><?=$author?></td>
              <td><?=$date?></td>
              <td> <img src="../images/<?=$image?>" height="50" class="rounded mx-auto d-block" alt=""> </td>
              <td class="text-center"> 
                <a href="posts.php?edit=<?=$id?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                <a href="posts.php?del=<?=$id?>" class="btn btn-danger"><i class="fa fa-trash" ></i></a>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div> <!-- /.row -->
  </div> <!-- /.container-fluid -->
</div>  <!-- /#page-wrapper -->

<?php 
  include('./includes/admin_footer.php');
?>