<?php
include "connect.php";


$Name = $_POST['Name'];
$Role = $_POST['Role'];
$PhoneNumber = $_POST['PhoneNumber'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// Attempt insert query execution
$sql = "INSERT INTO staff ( Name, Role, PhoneNumber, username, password) VALUES ('$Name', '$Role', '$PhoneNumber', '$username', '$password')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
   header('Location: /project/staffmanagement.php');

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>





