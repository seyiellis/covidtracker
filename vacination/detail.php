<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Covid19 Trackerg</title>
    <!-- Favicon-->
    <link rel="assets/apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon.ico" />
    <link href="assets/favicon.ico" rel="apple-touch-icon" sizes="120x120" />
    <link href="assets/favicon.ico" rel="apple-touch-icon" sizes="152x152" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <div class="d-flex" id="wrapper">
      
      <!-- Page content wrapper-->
      <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="https://covidtracker.dataspeaksintegrated.com">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    id="navbarDropdown"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Dropdown</a
                  >
                  <div
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdown"
                  >
                   <a class="dropdown-item" href="https://covidtracker.dataspeaksintegrated.com">Infection Report</a>
                    <a class="dropdown-item" href="https://covidtracker.dataspeaksintegrated.com/vacination/">Vacination Report</a>
                 
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid">
 <!--         <h1 class="mt-4">Report Portal</h1> -->
	<?php
require_once "Covidtracker.php";
$dose = $_POST['dose']; 
$country =  $_POST['country'];



$covidtrackerByClient = new Covidtracker(array(
	"dose" => $dose, 
	"country" => $country	
));
$covidtrackerByClient->run()->render();
?>	

        </div>
      </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
