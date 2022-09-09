<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Dashboard</a>
  </div>

  <!-- Top Menu Items -->

  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li>
        <a href="../"><i class="fa fa-fw fa-dashboard"></i> Web Site</a>
      </li>

      <li>
        <a href="categories.php"><i class="fa fa-fw fa-dashboard"></i> Categories</a>
      </li>
      <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="demo" class="collapse">
          <li>
            <a href="posts.php">All Posts</a>
          </li>
          <li>
            <a href="new_post.php">Add New Post</a>
          </li>
          </ul>
      </li>
    </ul>
  </div> <!-- /.navbar-collapse -->
</nav>