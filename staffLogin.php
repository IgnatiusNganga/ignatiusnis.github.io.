<?php
include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
 
// Attempt insert query execution
$sql = "SELECT username, password FROM staff WHERE username = '$username' AND password = '$password' LIMIT 1";
$result = mysqli_query($link, $sql);

// var_dump($sql);
// die;

if(mysqli_num_rows($result) > 0) {
    echo "Login Successful.";

    header('Location:/project/staffmenu.html');
} else{
    echo "<div>
    <h1>Incorrect Username / Password</h1>
    </div>";
    header('Location:/project/staff.html');
}
 
// Close connection
mysqli_close($link);
?>