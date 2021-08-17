
<?php
include "connect.php";


$MenuNumber = $_POST['MenuNumber'];
$Food =$_POST['Food'];
$Price = $_POST['Price'];

 
// Attempt insert query execution

$sql ="UPDATE `menu` SET  `Food` = '$Food', `Price` = '$Price' WHERE `menu`.`MenuNumber` = $MenuNumber";
//$result=mysql_query($sql);
if(mysqli_query($link, $sql)){
    echo "Records edited successfully.";
    header('Location: /project/menumanagement.php');

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}
 //DELETE FROM `menu` WHERE `menu`.`MenuNumber` = 6"?
// Close connection
mysqli_close($link);
?>

