<div class="col-md-4">

<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action="search.php" method="post">
         <div class="input-group">
        <input type="text" name="keywords" class="form-control">
        <span class="input-group-btn">
            <button class="btn btn-default" type="submit" name="search_btn">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
    <!-- /.input-group -->
    </form>
   
</div>



<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">

            <?php
                    $sql = " SELECT * FROM `categories` LIMIT 4 ";
                    $categories = mysqli_query($con , $sql);

                    while( $row = mysqli_fetch_assoc($categories) ):
                        $id =$row['id'];
                        $title=$row['title'];                 
                ?> 
                    <li>
                        <a href="#"><?=$title?></a>
                    </li>
<?php endwhile; ?>


            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>

</div>