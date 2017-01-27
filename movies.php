<!DOCTYPE html>

<!--
    Web template made by Guillermo Moran
    January 2016


-->

<html lang="en">
<head>
    <title>Austin Movie Times</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap Stuff-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- JQuery Stuff -->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>


    <!-- My own styling -->
    <link rel="stylesheet" href="./css/movies.css">
</head>

    <script type="text/javascript" class="init">
		   $(document).ready(function() {
			   $('#example').DataTable();
		   });
		</script>

<!--Start Body-->
<body>

  <!-- Navigation Bar-->

  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="http://gmoran.create.stedwards.edu/">
                    <img alt="Brand" src="../images/gm-logo.png" width="40" height="20">
                </a>

          </div> <!-- navbar-header -->

      <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
              <li class="active"><a href="./index.html">Home</a></li>
              <!-- <li><a href="#">Page 1</a></li> -->

          </ul>
      </div> <!-- navbar-collapse -->
    </div> <!-- container-fluid -->
  </nav>
  <!-- End Navigation -->

    <!-- Page Header -->
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="page-header">
                  <div id="pageTitle">
                        <img src="./images/camera.png" alt="camera" width="50" height="50"/>
                        Austin Movie Times
                  </div>
                  Today's Showtimes
              </div>
          </div>
      </div>
    </div>
    <!-- End Page header -->

    <!-- Start bg-clear -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <?php
                //Sorry.
                include('moviesTable.php');
                generateMoviesTable();
              ?>

            </div>
        </div>
    </div>
    <!-- End bg-clear -->


    <!-- Start bg-content (footer) -->
    <div class="container text-center" id=footer>
        <p>
          Copyright &copy; 2016 Guillermo Morán | Made with love for <a href="http://gmoran.create.stedwards.edu/cosc2328"> COSC 2328</a>
        </p>
    </div>
    <!-- End bg-content (footer) -->

</body>
</html>
