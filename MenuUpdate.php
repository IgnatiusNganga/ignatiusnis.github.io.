<?php
include "connect.php";


$Food = $_POST['Food'];
$Price = $_POST['Price'];

 
// Attempt insert query execution
$sql = "INSERT INTO menu ( Food, Price) VALUES ('$Food', '$Price')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    header('Location: /project/menumanagement.php');

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>





