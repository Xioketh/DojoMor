<?php 
include 'adminHeader.php';

require_once 'connection.php';
$sql = "SELECT * FROM registerdstudents";
$result = $conn->query($sql);
?>
<main id="main" class="ps-5 pe-5">

<div class="m-5">
    <h2 style="font-family: 'Indie Flower', cursive;">Registerd Students</h2>
</div>
<div class="data m-5">

<?php

if ($result->num_rows > 0) {
    // echo '<table class="table">';
    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered">';
    echo '<thead ><tr><th scope="col">Student Name</th><th scope="col">Address</th><th scope="col">Mobile Number</th><th scope="col">Session 1</th><th scope="col">Session 2</th><th scope="col">Session 3</th></tr></thead>';
    echo '<tbody>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['Sname'] . '</td>';
        echo '<td>' . $row['address'] . '</td>';
        echo '<td>' . $row['tel'] . '</td>';
        echo '<td>' . $row['session1'] . '</td>';
        echo '<td>' . $row['session2'] . '</td>';
        echo '<td>' . $row['session3'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody></table>';
} else {
    echo '<div class="alert alert-info">No records found.</div>';
}


$conn->close();
?>

</div>
</main>

<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>