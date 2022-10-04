<?php
/* 
MySQL server connection.
*/


$servername = "servername";
$username = "username";
$password = "password";
$dbname = "dbname";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Escape user inputs for security
$firstname = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
$emailname = mysqli_real_escape_string($conn, $_REQUEST['emailname']);
$phonenum = mysqli_real_escape_string($conn, $_REQUEST['phonenum']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$coursename = mysqli_real_escape_string($conn, $_REQUEST['coursename']);

// Attempt insert query execution
$sql = "INSERT INTO `users`(`firstname`, `lastname`, `emailname`, `phonenum`, `password`, `coursename`) VALUES ('$firstname', '$lastname', '$emailname', '$phonenum', '$password', '$coursename')";

if ($conn->query($sql) === TRUE) {
    echo "Thank You ";
    echo $firstname;
    echo " ";
    echo $lastname;
    echo ", ";
    echo "New record created successfully";
    echo ".  ";
    
    header('Location: https://jswebpages.com/php/test_code/index.php');
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
