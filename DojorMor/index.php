<?php 
include 'header.php';

require_once 'connection.php';
$sql = "SELECT * FROM session";
$data_all = $conn->query($sql);

?>

<main id="main">
  <div class="container">

  <div class="row">
    <div class="col-1">

    </div>
    <div class="col-4 p-0">
    <div class="hero">
    <img src="assets/img/logo.png" alt="" class=" p-0">
    
    </div>
    </div>
    <div class="col-6  p-0 d-none d-md-block">
    <div class="topicHero">
      <p class="welcomeTopic">Welcome, DojoMor Competition Warriors! </p>
      <p class="welcome">Young warriors, aged 7 to 17, the DojoMor Competition is back! Join for a thrilling martial arts adventure, where fun meets skill-building.</p>
    <div class="welcome2 p-0">Don't miss out!</div>
    </div>
    </div>
    
      
  </div>

  <div class="row">
    <div class="col-5 d-none d-md-block"></div>
    <!-- <div class="second col-4"> -->
      <!-- <img src="assets/img/registerForm.png" alt=""> -->
    <!-- </div> -->
    <div class="second col-7 d-none d-md-block">
    <img src="assets/img/registerForm.png" alt="">
    </div>
  </div>

    <div class="row about-cols mt-5">
      <?php 
      while($row = mysqli_fetch_assoc($data_all)){
      ?>
        <div class="col-md-4 col-sm-4 mb-2">
          <div class="card">
        <div class="card-info">
        <div class="card-title"><?php echo $row["technology"] ?></div>
        <div class="card-subtitle">Session Hours</div>

        </div>
        <ul class="time">
        <li class="card-social__item">
        <?php echo $row["session1"] ?>
    </li>
    <li class="card-social__item">
        <?php echo $row["session2"] ?>
    </li>
    <li class="card-social__item">
        <?php echo $row["session3"] ?>
    </li>
      
  </ul>

  <ul class="card-social">
    <li class="card-social__item"><button class="btn btn-primary"> <a href="register.php" class="text-white">Register</a></button></li>
  </ul>
</div>
        </div>
      <?php 
      }
      ?>
    </div>
  </div>

  <div class="row">
    <div class="col-3 d-none d-md-block"></div>
    <div class="second2 col-6  d-none d-md-block">
      <img src="assets/img/index.png" alt="">
    </div>
    <div class="second2 col-3 d-none d-md-block">
    <!-- <img src="assets/img/index.png" alt=""> -->
    </div>
  </div>
</main>

<?php include 'footer.php';?>
