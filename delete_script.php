
<?php
include "connect.php";


$MenuNumber = $_POST['MenuNumber'];
//$Price = $_POST['Price'];

 
// Attempt insert query execution
$sql = "DELETE FROM `menu` WHERE `menu`.`MenuNumber` = $MenuNumber" ;
//$result=mysql_query($sql);
if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
    header('Location: /project/menumanagement.php');

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}
 //DELETE FROM `menu` WHERE `menu`.`MenuNumber` = 6"?
// Close connection
mysqli_close($link);
?>

