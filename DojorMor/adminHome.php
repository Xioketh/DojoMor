<?php 
include 'adminHeader.php';

require_once 'connection.php';
$sql = "SELECT * FROM session";
$data_all = $conn->query($sql);
?>


<main id="main">
  <div class="container">

  <div class="row col-sm mb-3">
  <div class="row justify-content-end col-sm">
    <div class="col-md-4 col-sm">
        <button class="btn btn-success me-2"><a href="addSession.php" style="color:white;">Add Session</a></button>
        <button class="btn btn-primary"><a href="registerdStudents.php" style="color:white;">Registerd Students</a></button>
    </div>
    </div>
  </div>
  <?php 
                        $success_message = isset($_GET['success']) ? $_GET['success'] : "";
                        if (!empty($success_message)) : 
                        ?>
                        <div class="alert alert-success mt-3">
                            <?php 
                            echo $success_message; 
                            ?>
                        </div>
                        <script>
                            setTimeout(function() {
                                window.location.href = 'adminHome.php';
                            }, 3000); 
                        </script>
                        <?php endif ; ?>
    <div class="row about-cols">
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
</div>
        </div>
      <?php 
      }
      ?>
    </div>
  </div>
</main>


<?php 
include 'adminFooter.php';
?>