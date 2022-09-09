<div class="col-md-4">
  <!-- Blog Search Card -->
  <div class="card p-2 my-2" style="background-color: #e3f2fd;">
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

  <!-- Blog Categories card -->
  <div class="card p-2 my-2" style="background-color: #e3f2fd;">
    <h4>Blog Categories</h4>
      <ul class="list-group list-group-horizontal border-0">
        <?php
          $sql = " SELECT * FROM `categories` LIMIT 4 ";
          $categories = mysqli_query($con , $sql);
          while( $row = mysqli_fetch_assoc($categories) ):
            $id =$row['id'];
            $name=$row['name'];                 
        ?> 
        <li class="list-group-item border-0" style="background-color: #e3f2fd;">
          <a style="text-decoration: none; background-color: #e3f2fd;" href="by_category.php?cid=<?=$id?>"><?=$name?></a>
        </li>
        <?php endwhile; ?>
      </ul>
  </div>

  <!-- Side Widget Card -->
  <div class="card p-2 my-2" style="background-color: #e3f2fd;">
    <h4>Side Widget Card</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
  </div>
</div>