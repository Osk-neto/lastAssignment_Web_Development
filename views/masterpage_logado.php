<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
    
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <?php
        if(isset($custom_import)){
            require __DIR__."/".$custom_import;
        }
    ?>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php
                $menu = array();
                $menu['home'] = '';
                $menu['article'] = '';
                $menu['database_review'] = '';
                $menu['report'] = '';
                $menu['logout'] = '';
                $menu[$active] = 'active';
          ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php echo $menu['home'];?>">
            <a class="nav-link" href="index_logado.php">Home
            </a>
          </li>
          <li class="nav-item <?php echo $menu['article'];?>">
            <a class="nav-link" href="article.php">Article</a>
          </li>
          <li class="nav-item <?php echo $menu['database_review'];?>">
            <a class="nav-link" href="database_review.php">Database Review</a>
          </li>
          <li class="nav-item <?php echo $menu['report'];?>">
            <a class="nav-link" href="report.php">Report</a>
          </li>
          <li class="nav-item <?php echo $menu['logout'];?>">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <?php
        require __DIR__.'/'.$content;
    ?>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>


</body>

</html>
