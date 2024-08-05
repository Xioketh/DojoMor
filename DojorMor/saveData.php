<?php

$success_message = "";
$unsuccess_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn=mysqli_connect("localhost","root","","dojomor");


$studentName = $_POST["name"];
$address = $_POST["address"];
$tel = $_POST["tel"];

// Session 1
$session1Technology = $_POST["session1_technology"]; 
$session1Time = $_POST["s1"];
$combinedVariable1 = $session1Technology . ' _' . $session1Time;

// Session 2
$session2Technology = $_POST["session2_technology"];
$session2Time = $_POST["s2"];
$combinedVariable2 = $session2Technology . ' _' . $session2Time;

// Session 3
$session3Technology = $_POST["session3_technology"]; 
$session3Time = $_POST["s3"];
$combinedVariable3 = $session3Technology . ' _' . $session3Time;


// DB DATA
   $sql = "INSERT INTO registerdstudents (Sname, address, tel, session1, session2, session3 )
           VALUES ('$studentName', '$address', '$tel', '$combinedVariable1','$combinedVariable2', '$combinedVariable3')";

if ($conn->query($sql) === TRUE) {
    // echo '<div class="alert alert-success mt-3">Data saved successfully!</div>';
    $success_message = "Data saved successfully!";
    header("Location: register.php?success=" . urlencode($success_message));
exit;
} else {
    // echo '<div class="alert alert-danger mt-3">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    $unsuccess_message = "Data saved unsuccessfully!";
    header("Location: register.php?success=" . urlencode($unsuccess_message));
exit;
}
    $conn->close();
    
}


?>