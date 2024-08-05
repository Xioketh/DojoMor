<?php 
include 'header.php';

require_once 'connection.php';
$sql = "SELECT * FROM session";
$data_all = $conn->query($sql);
$data_all2 = $conn->query($sql);
$data_all3 = $conn->query($sql);

?>

<main id="main">


<div class="row m-3">
<!-- <div class="col-md-4">
  <img src="assets/img/session/registerForm.png" alt="" style="width: 70%; height:80%;">
</div> -->
<div class="col-10 col-sm ">
<div class="container" style="text-align: center;">

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="registerForm">

<form class="m-3  border border-2 p-3" method="POST" action="saveData.php" onsubmit="return validateForm()">
                     <h3 >Register Now</h3>
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
                                window.location.href = 'register.php';
                            }, 3000); 
                        </script>
                        <?php endif ; ?>

                        <div class="mb-3 mt-3">
                           <input type="text" class="form-control" name="name" placeholder="Student Name">
                        </div>
                        <div class="mb-3">
                           <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>

                        <div class="mb-3">
                           <input type="text" class="form-control" name="tel" placeholder="Mobile Number">
                        </div>

                        <div class="session_data mb-3">
                        <label for="name">Session Details</label> 
                        <div class="row">
                          <div class="col-12 col-sm-4 mb-3 text-start">
                                <label for="name">Session 1</label>
                              <select class="form-select" aria-label=".form-select-lg example" name="session1_technology">
                                  <option selected>Select Technology</option>
                                  <?php  while($row = mysqli_fetch_array($data_all)):;?>
                                  <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
                                  <?php endwhile; ?>
                              </select>
                                <label for="">Time</label>
                                <div class="radio-input">
                              <label>
                              <input value="10AM" name="s1" id="s1-v1" type="radio" checked="">
                              <span>10AM</span>
                              </label>
                              <label>
                                <input value="11AM" name="s1" id="s1-v2" type="radio">
                              <span>11AM</span>
                              </label>
                              <label>
                                <input value="12Noon" name="s1" id="s1-v3" type="radio">
                              <span>12Noon</span>
                              </label>
                              <span class="selection"></span>
                            </div>
                          </div>
                          <div class="col-12 col-sm-4 mb-3 text-start">
                                <label for="name">Session 2</label>
                              <select class="form-select" aria-label=".form-select-lg example" name="session2_technology">
                                  <option selected>Select Technology</option>
                                  <?php  while($row1 = mysqli_fetch_array($data_all2)):;?>
                                  <option value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></option>
                                  <?php endwhile; ?>
                              </select>
                                <label for="">Time</label>
                                <div class="radio-input">
                                <label>
                              <input value="10AM" name="s2" id="s2-v1" type="radio" checked="">
                              <span>10AM</span>
                              </label>
                              <label>
                                <input value="11AM" name="s2" id="s2-v2" type="radio">
                              <span>11AM</span>
                              </label>
                              <label>
                                <input value="12Noon" name="s2" id="s2-v3" type="radio">
                              <span>12Noon</span>
                              </label>
                                  <span class="selection"></span>
                                </div>
                          </div>
                          <div class="col-12 col-sm-4 mb-3 text-start">
                          <label for="name">Session 3</label>
                              <select class="form-select" aria-label=".form-select-lg example" name="session3_technology">
                                  <option selected>Select Technology</option>
                                  <?php  while($row1 = mysqli_fetch_array($data_all3)):;?>
                                  <option value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></option>
                                  <?php endwhile; ?>
                              </select>
                                <label for="">Time</label>
                                <div class="radio-input">
                                <label>
                              <input value="10AM" name="s3" id="s3-v1" type="radio" checked="">
                              <span>10AM</span>
                              </label>
                              <label>
                                <input value="11AM" name="s3" id="s3-v2" type="radio">
                              <span>11AM</span>
                              </label>
                              <label>
                                <input value="12Noon" name="s3" id="s3-v3" type="radio">
                              <span>12Noon</span>
                              </label>
                                  <span class="selection"></span>
                                </div>
                                
                          </div>
              
        <div id="error-msg" class="alert alert-danger mt-3 d-none"></div>
                        </div>
                        </div>
                        <div class="ms-5">
                        <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                        <button type="submit" class="btn btn-primary col-12 col-sm">
        Register
      </button>
                        </div>
                     </form>
                     </div>
                  <script>

  function validateForm() {
    var name = document.querySelector('input[name="name"]').value.trim();
    var address = document.querySelector('input[name="address"]').value.trim();
    var tel = document.querySelector('input[name="tel"]').value.trim();

    var session1Technology = document.querySelector('select[name="session1_technology"]').value;
    var session2Technology = document.querySelector('select[name="session2_technology"]').value;
    var session3Technology = document.querySelector('select[name="session3_technology"]').value;

    // Get the selected session times
    var s1Time = document.querySelector('input[name="s1"]:checked').value;
    var s2Time = document.querySelector('input[name="s2"]:checked').value;
    var s3Time = document.querySelector('input[name="s3"]:checked').value;



    if (name === '') {
      document.getElementById('error-msg').innerText = 'Please fill Your Name.';
      document.getElementById('error-msg').classList.remove('d-none');
      return false;
    }

    if (address === '') {
      document.getElementById('error-msg').innerText = 'Please fill Address.';
      document.getElementById('error-msg').classList.remove('d-none');
      return false;
    }

    if (tel === '') {
      document.getElementById('error-msg').innerText = 'Please fill Mobile Number.';
      document.getElementById('error-msg').classList.remove('d-none');
      return false;
    }

    if (session1Technology === session2Technology || session1Technology === session3Technology || session2Technology === session3Technology) {
      document.getElementById('error-msg').innerText = 'Cannot join same session twis.';
      document.getElementById('error-msg').classList.remove('d-none');
      return false;
}
    if (session1Technology === 'Select Technology' || session2Technology === 'Select Technology' || session3Technology === 'Select Technology') {
      document.getElementById('error-msg').innerText = 'Please select technology for sessions..';
      document.getElementById('error-msg').classList.remove('d-none');
      return false;
    }

    if (s1Time === s2Time || s1Time === s3Time || s2Time === s3Time) {
      document.getElementById('error-msg').innerText = 'Session Times Must be Different from each Session.';
      document.getElementById('error-msg').classList.remove('d-none');
      return false; 
    }
  }
</script>

</div>
</div>


</main>

<?php include 'footer.php';?>
