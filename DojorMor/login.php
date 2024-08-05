<?php 
include 'header.php';
?>

<main id="main">

<!-- <div class="row">



<div class="col">

<img src="assets/img/login.png" alt="" style="width:300px; heigth:300px; margin-left:50px">
</div>
<div class="col-6"> -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="logform pt-5" >


<form class="form"  method="POST" action="adminHome.php" onsubmit="return validateForm()" >
       <p class="form-title">Sign in to your account</p>
        <div class="input-container">
          <input type="text"  id="username" placeholder="Enter User Name">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password" id="password" placeholder="Enter Password">
        </div>
        <div id="error-msg" class="alert alert-danger mt-3 d-none"></div>
         <button type="submit" class="submit">
        Sign in
      </button>
   </form>
   </div>
   <script>
    function validateForm() {
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      if (username === 'admin' && password === 'admin') {
return true;
      } else {
        document.getElementById('error-msg').innerText = 'User Name or Password Incorrect.';
        document.getElementById('error-msg').classList.remove('d-none');
        return false;
      }

      return false;
    }
  </script>

</main>


<?php include 'footer.php';?>


