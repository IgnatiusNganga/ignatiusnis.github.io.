<?php
include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
 
// Attempt insert query execution
$sql = "SELECT username, password FROM manager WHERE username = '$username' AND password = '$password' LIMIT 1";
$result = mysqli_query($link, $sql);

// var_dump($sql);
// die;

if(mysqli_num_rows($result) > 0) {
    echo "Login Successful.";

    header('Location:/project/ManagerMenu.html');
} else{
     header('Location:/project/manager.html');
}
 
// Close connection
mysqli_close($link);
?>