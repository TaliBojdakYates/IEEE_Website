<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <title>Bootstrap Example</title>
</head>
<body>
  
  <!-- Include the header -->
  <?php include('header.php'); ?>


  <!-- Button trigger modal -->


<!-- Learn More Modal 1 -->
<div class="modal fade" id="modal1" tabindex="-1" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Event One</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error minima magnam quod, saepe dolores corporis praesentium. Repudiandae ab modi, maiores cum, similique rem accusantium eveniet, eligendi minus perferendis magni inventore.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Learn More Modal 2 -->
<div class="modal fade" id="modal2" tabindex="-1" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Event Two</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus quis numquam ex. Culpa, accusantium qui voluptas inventore cupiditate laboriosam nesciunt aut dolore totam quis a alias, fugit dicta veritatis quam?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Learn More Modal 3 -->
<div class="modal fade" id="modal3" tabindex="-1" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Event Three</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis ab dignissimos deleniti soluta molestiae ipsam aut incidunt mollitia, animi amet blanditiis nam quisquam omnis sed eaque optio? Distinctio, tenetur quas.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="welcome">
  <h1>Welcome to IEEE</h1>
  <h4>Institute of Electrical and Electronics Engineers</h4>
</div>
<div class="eventPage py-5">
  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">
        <h3 class="my-3">Upcoming Events</h3>
        <h6 class="subtitle font-weight-normal">Participate in our events to gain real world experience and learn about the constantly changing field</h6>
      </div>
    </div>

    <div class="row mt-4">
      <!-- Column -->
      <div class="col-md-4">
        <div class="card border-0 mb-4 events">
          <img class="card-img-top eventImg" src="images/eventImg1.png" alt="">
          <div class="date">Oct<span class="d-block">23</span></div>
          <h5 class="font-weight-medium mt-3 title">Event One</h5>
          <p class="mt-3">This is going to be a great event one</p>
          <a  class="learnMore" data-bs-toggle="modal" data-bs-target="#modal1"><i class="bi bi-info-circle"></i> Learn More</a>

        </div>
      </div>
      <!-- Column -->
      <div class="col-md-4">
        <div class="card border-0 mb-4">
        <img class="card-img-top eventImg"  src="images/eventImg2.png" alt="">
          <div class="date">Oct<span class="d-block">23</span></div>
          <h5 class="font-weight-medium mt-3 title">Event Two</h5>
          <p class="mt-3">This is also going to be a superb event</p>
          <a  class="learnMore" data-bs-toggle="modal" data-bs-target="#modal2"><i class="bi bi-info-circle"></i>  Learn More</a>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-4">
        <div class="card border-0 mb-4">
        <img class="card-img-top eventImg" src="images/eventImg3.png" alt="">
          <div class="date">Oct<span class="d-block">23</span></div>
          <h5 class="font-weight-medium mt-3 title">Event Three</h5>
          <p class="mt-3">Hopefully this event goes as planned</p>
          <a  class="learnMore" data-bs-toggle="modal" data-bs-target="#modal3"> <i class="bi bi-info-circle"></i>  Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- The code to create the toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="images/hawk.png" class="rounded me-2" alt="...">
      <strong class="me-auto">Welcome to IEEE@IIT</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Interested in joining IEEE?
      <a href="signUp.php"  class="btn btn-secondary m-2" role="search" role="button">Sign Up</a>
    </div>

    
  </div>
</div>



<!-- Include footer -->
<?php include('footer.php'); ?>


  <!-- The following is the script to make the toast appear-->
  <script>
      window.onload = (event) => {
        let myAlert = document.querySelector('.toast');
        let bsAlert = new bootstrap.Toast(myAlert);
        
        // shows toast after 1 second delay
        setTimeout(() => {
          bsAlert.show();
        }, 2000);
      }
  </script>
</body>
</html>