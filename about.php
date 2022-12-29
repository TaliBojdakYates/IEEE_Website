<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
  <title>About</title>
</head>
<body>
  
<?php include('header.php'); ?>

<!-- about us section and image -->
<div class="container m-5">
   <div class="row" style="align-items: center">
        <div class="col-md-6">
            <h3 class="text-center">Who are we?</h3>
            <p>IEEE provides opportunities to meet and learn from fellow IEEE Student and Graduate Student Members and engage with professional IEEE members locally. Our student branch can be one of the most positive elements of your academic career, offering programs, activities, and professional networking opportunities that build critical skills outside of the classroom. IEEE has student branches at thousands of universities and colleges in hundreds of countries throughout the world.
          </p>   
        </div>
        <div class="col-md-6 team">
            <img src="images/team.jpg" class="img-fluid rounded">
        </div>
    </div>
</div>

<!-- mission section -->
<div class="grid  mission">
  <div class="g-col-6">
  <h3 class="text-center">Mission</h3>
            <p> IEEE serves to give students a community of peers, and a connection to faculty and industry professionals who drive innovation in countless technical fields. Student involvement in branch activities, whether special projects, social and technical meetings, outreach programs, conferences, etc. can help develop a record of accomplishment and capabilities beyond the norm.
          </p>
  </div>
  <div class="g-col-6">
  <img src="images/ieee-logo.png" class="img-fluid">
  </div>
</div>
  



   <!-- <div class="row mission container-fluid" style="align-items: center">
        <div class="col">
            <h3 class="text-center">Mission</h3>
            <p> IEEE serves to give students a community of peers, and a connection to faculty and industry professionals who drive innovation in countless technical fields. Student involvement in branch activities, whether special projects, social and technical meetings, outreach programs, conferences, etc. can help develop a record of accomplishment and capabilities beyond the norm.
          </p>   
        </div>
        <div class="col team">
            <img src="images/ieee-logo.png" class="img-fluid">
        </div>
    </div> -->


</div>
  <div class="board">
    <h3 class="boardTitle" >
      OUR EXECUTIVE TEAM
    </h3>
    <div  class="row">
       <div class="col-md-6 col-lg-3">

       <!-- The following can be copied and pasted to add more members -->
        <div class="card" id="card">
          <!-- insert image name in the src -->
          <img class="shadow p-3 " src="images/eduardo.jpeg" alt="Card image cap">
          <div class="card-body">
            <!-- below is the name of the person -->
            <h6 class="card-title">Eduardo Calix</h6>
            <!-- below is their postion -->
            <p class="position">President</p>
            <p></p>
          </div>
        </div>
      </div>
      <!-- end of copy and paste for new members -->

      <div class="col-md-6 col-lg-3">
        <div class="card" id="card" >
          <img class="shadow p-3 " src="images/yeshwanth.jpg" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">Yeshwanth Vemula</h6>
            <p class="position">Vice President</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card" id="card">
          <img class="shadow p-3 " src="images/chibuzo.jpg" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">Chibuzo Valentine Nwadike</h6>
            <p class="position">Project Chair</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card" id="card">
          <img class="shadow p-3 " src="images/sal.png" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">Salvador Jimenez Gomez</h6>
            <p class="position">Social Media Manager</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card" id="card" >
          <img class="shadow p-3 " src="images/person.jpg" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">Tali Bojdak-Yates</h6>
            <p class="position">Webmaster</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card" id="card">
          <div></div>
          <img class="shadow p-3 " src="images/neil.png" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">Neil Dhote</h6>
            <p class="position">Secretary</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card" id="card">
          <img class="shadow p-3 " src="images/person.jpg" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">Card title</h6>
            <p class="card-text"></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card" id="card">
          <img class="shadow p-3 " src="images/person.jpg" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">Card title</h6>
            <p class="card-text"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>


</body>
</html>




