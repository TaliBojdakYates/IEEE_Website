<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
<link rel="stylesheet" href="style.css">

<!-- Header navbar that collapses into a side bar when the screen is medium or smaller -->
<nav class="navbar navbar-dark  navbar-expand-md header" >
  <div class="container-fluid">
    <img src="images/ieeelogoCircle.png" alt="" style="padding: 0.5rem">
    <h2 class="navbar-item font" style="font-size:1.5rem;  margin: 1rem; color: white" href="#">IEEE@IIT</h2>
    
    <!-- Button to click to create offcanvas page when on smaller screens  -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- The offcanvas section -->
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item"  >
              <a class="nav-link active m-2"  href="main.php" >Home</a>
            </li>  
            <li class="nav-item" >
              <a class="nav-link active m-2"  href="calendar.php" >Calendar</a>
            </li>     
            <li class="nav-item">
              <a class="nav-link m-2 "  href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link m-2" href="projects.php">Projects</a>
            </li>
        </ul>
        <a href="signUp.php"  class="btn btn-light m-2" role="search" role="button">Sign Up</a>
      </div>
    </div>
  </div>
</nav>