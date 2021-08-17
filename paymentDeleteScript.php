
<?php
include "connect.php";


$Payment_ID = $_POST['Payment_ID'];
//$Price = $_POST['Price'];

 
// Attempt insert query execution
$sql = "DELETE FROM `payments` WHERE `payments`.`Payment_ID` = $Payment_ID" ;
//$result=mysql_query($sql);
if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
    header('Location: /project/payments.php');

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}
 //DELETE FROM `menu` WHERE `menu`.`MenuNumber` = 6"?
// Close connection
mysqli_close($link);
?>

