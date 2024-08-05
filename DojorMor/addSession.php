<?php 
include 'adminHeader.php';

?>
<main class="container mt-5">

<div class="row">
    <div class="col-12 text-center">
        <h2 style="font-family: 'Indie Flower', cursive;">Add New Session</h2>
    </div>
</div>

<div class="addSession row mt-5">

    <div class="col-12 col-sm-8 offset-sm-2">
        <form method="POST" action="saveSession.php" onsubmit="return validateForm()">
            <div class="input-container">
                <p for="techName">Technology Session Name</p>
                <input type="text" class="form-control" id="techName" name="name" placeholder="Technology Session Name">
            </div>

            <div class="input-container">
                <p>Session Hours</p>
                <div class="d-flex flex-wrap">
                    <label class="border border-2 me-2 mb-2 p-2">10AM</label>
                    <label class="border border-2 me-2 mb-2 p-2">11AM</label>
                    <label class="border border-2 me-2 mb-2 p-2">12 Noon</label>
                </div>
            </div>

            <div id="error-msg" class="alert alert-danger mt-3 d-none"></div>

            <button type="submit" class="mt-3 btn btn-success">Save</button>
        </form>
    </div>
   <script>
    function validateForm() {
      var session = document.getElementById('techName').value;

if (session === '') {
  document.getElementById('error-msg').innerText = 'Enter Technology Name.';
  document.getElementById('error-msg').classList.remove('d-none');
  return false;
}

      return true;
    }
  </script>


</div>
</main>

<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>