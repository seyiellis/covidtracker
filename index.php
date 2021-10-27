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
    <link href="css/design.css" rel="stylesheet" />
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
                  <a class="nav-link" href="https://covidtracker.dataspeaksintegrated.com/">Infection Reporte</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://covidtracker.dataspeaksintegrated.com/vacination">Vacinaation Report<a></li>
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
                    <a class="dropdown-item" href="https://covidtracker.dataspeaksintegrated.com/vacination">Vacination Report</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    
	<!-- Page content-->


<div class="back">


  <div class="div-center">


    <div class="content">


      <h3 class="col text-center">Covid19-Tracker</h3>
<p class="text-center"> Infection Report</p>
      <hr />

      <form method="POST" action="detail.php">
        <div class="form-group col text-center">
          <label for="category">Daily Report</label>
         <input class="form-check-input" type="radio" name="time" id="daily" value="daily" checked>

          <label for="category">Monthly Report</label>
         <input class="form-check-input mt-2" type="radio" name="time" id="monthly" value="monthly">
        </div>
        <div class="form-group col text-center">
  <select name="country" class="custom-select my-1 mr-sm-2 mt-2" id="inlineFormCustomSelectPref" required>
    <option >Select Country</option>
    <option selected value="England">England</option>
    <option value="Scotland">Scotland</option>
    <option value="Northern Ireland">Northern Ireland</option>
  </select> 
        </div>
	<div class="col text-center">
        <button type="submit" class="btn btn-primary mt-3">Search</button>
	</div>
        <hr />

      </form>

    </div>


    </span>
  </div>




    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
