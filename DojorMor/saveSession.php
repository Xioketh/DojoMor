<?php

$success_message = "";
$unsuccess_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn=mysqli_connect("localhost","root","","dojomor");


$session = $_POST["name"];
$session1="10AM";
$session2="11AM";
$session3="12Noon";

// DB DATA
   $sql = "INSERT INTO session (technology, session1, session2, session3 )
           VALUES ('$session', '$session1', '$session2','$session3')";

if ($conn->query($sql) === TRUE) {
    // echo '<div class="alert alert-success mt-3">Data saved successfully!</div>';
    $success_message = "Data saved successfully!";
    header("Location: adminHome.php?success=" . urlencode($success_message));
exit;
} else {
    // echo '<div class="alert alert-danger mt-3">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    $unsuccess_message = "Data saved unsuccessfully!";
    header("Location: adminHome.php?success=" . urlencode($unsuccess_message));
exit;
}
    $conn->close();
    
}

?>