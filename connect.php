<?php
$firstName = $_POST['First name'];
$lastName = $_POST['Last name'];
$idNo = $_POST['Id No'];
$gender = $_POST['Gender'];
$email = $_POST['Email'];
$course = $_POST['Course'];
$resultSlip = $_POST['Result'];

// Database connection
$conn = new mysqli('localhost','root','','kowino123');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(firstName, lastName, idNo, gender, email, course, resultSlip)
    values(?, ?, ?, ?, ?, ?, ?)")
    $stmt->bind_param("ssissss", $firstName, $lastName, $idNo, $gender, $email, $course, $resultSlip);
    $stmt->execute();
    echo "SUBMITTED SUCCESSFUL";
    $stmt->close();
    $conn->close();
}

?>