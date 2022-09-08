<?php 
include('./includes/admin_header.php');
include('./includes/admin_navbar.php');
?>

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="page-header"> WIND News  <small>Admin Dashboard</small> </h1> 
                <div class="row">
                    <div class="col-sm-6">
                        <table class="table table-bordered table-hover  table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $sql = " SELECT * FROM `categories` ";
                                $categories = mysqli_query($con , $sql);
                                    $i=0;
                                while( $row = mysqli_fetch_assoc($categories) ):
                                    $id =$row['id'];
                                    $title=$row['title']; 
                                    $i++;                
                            ?> 
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$title?></td>
                                    <td class="text-center"> <a href="categories.php?edit=<?=$id?>" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                                    <td class="text-center"> <a href="categories.php?del=<?=$id?>" class="btn btn-danger"><i class="fa fa-trash" ></i></a></td>
                                </tr>

                                <?php endwhile; ?>
                            </tbody>
                        </table>
                       
                        <?php 
                        if(isset($_GET['del'])){
                            $del = $_GET['del'];
                            $delSql = " DELETE FROM `categories` WHERE `id`= '$del' ";
                            $delCategory = mysqli_query($con , $delSql);
                            header("Location:categories.php");
                        }
                        ?>
                    </div><!-- table -->

                    <div class="col-sm-6">
                        
                        <?php
                            if(isset($_POST['add_category'])){
                                $title = $_POST['title'];
                               $sql = " INSERT INTO `categories` (`title`) VALUES ('$title') ";
                               $insertCategory = mysqli_query($con , $sql);
                               header("Location:categories.php");
                            }
                        ?>
                    <form action="" method="post">
                        <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                        </div><!--  -->
                        <div class="form-group text-center">
                                <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
                        </div><!--  -->
                    </form>    
                  

                    <?php
                    if(isset($_GET['edit'])){
                        $edit = $_GET['edit'];
                        ?>
                        <h2 class="text-center">Edit Form</h2>
                           <form action="" method="post">
                        <div class="form-group">
                                <label>Title</label>

                                <?php
                                $sql = " SELECT * FROM `categories` WHERE `id` = '$edit'  ";
                                $categories = mysqli_query($con , $sql);
            
                                while( $row = mysqli_fetch_assoc($categories) ):
                                    $id =$row['id'];
                                    $title=$row['title'];                 
                            ?> 
                                <input type="text" name="title" value="<?=$title?>" class="form-control">
                          <?php endwhile; ?>

                          <?php
                            if(isset($_POST['update_category'])){
                                $new_title = $_POST['title'];
                               $updateSql = " UPDATE `categories` SET `title`='$new_title' WHERE `id` = '$edit' ";
                               $updateCategory = mysqli_query($con , $updateSql);
                               header("Location:categories.php");
                            }
                          ?>
                        </div><!-- text -->
                        <div class="form-group text-center">
                                <button type="submit" name="update_category" class="btn btn-success">Update Category</button>
                        </div><!--  -->
                    </form>    
       
                  <?php  } ?> 
                 </div><!--col-6 form -->
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->

        </div>  <!-- /#page-wrapper -->

        <?php 
include('./includes/admin_footer.php');
?>