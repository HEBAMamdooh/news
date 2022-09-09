<nav class="navbar navbar-expand-lg fixed-top"  style="background-color: #e3f2fd;" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">WIND</a>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
          $sql = " SELECT * FROM `categories` ";
          $categories = mysqli_query($con , $sql);
          while( $row = mysqli_fetch_assoc($categories) ):
            $id =$row['id'];
            $name=$row['name'];                 
        ?>
        <li class="nav-item">
          <a class="nav-link" href="by_category.php?cid=<?=$id?>"><?=$name?></a>
        </li>
        <?php endwhile; ?>
      </ul>

    </div> <!-- navbar-collapse -->
  </div> <!-- container-fluid -->
</nav>