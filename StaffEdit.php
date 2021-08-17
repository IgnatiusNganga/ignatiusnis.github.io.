
<?php
include "connect.php";


$Staff_ID = $_POST['Staff_ID'];
$Name =$_POST['Name'];
$Role = $_POST['Role'];
$PhoneNumber =$_POST['PhoneNumber'];
//$DateHired = $_POST['DateHired'];
$username = $_POST['username'];
$password = $_POST['password'];

 
// Attempt insert query execution

$sql ="UPDATE `staff` SET  `Name` = '$Name', `Role` = '$Role' , `PhoneNumber` = '$PhoneNumber', `username` = '$username', `password` = '$password' WHERE `staff`.`Staff_ID` = $Staff_ID";
//$result=mysql_query($sql);
if(mysqli_query($link, $sql)){
    echo "Records edited successfully.";
   
  
    header('Location: /project/staffmanagement.php');

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>

