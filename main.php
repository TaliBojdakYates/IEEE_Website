<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

    <title>Bootstrap Example</title>
</head>
<body>
  
  <!-- Include the header -->
  <?php include('header.php'); ?>


<!-- Events title -->
<div class="events" >
    <h3>Upcoming Events</h3>
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