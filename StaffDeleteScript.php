
<?php
include "connect.php";


$STAFF_ID = $_POST['STAFF_ID'];
//$Price = $_POST['Price'];

 
// Attempt insert query execution
$sql = "DELETE FROM `staff` WHERE `staff`.`STAFF_ID` = $STAFF_ID" ;
//$result=mysql_query($sql);
if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
    header('Location: /project/staffmanagement.php');

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}
 //DELETE FROM `menu` WHERE `menu`.`MenuNumber` = 6"?
// Close connection
mysqli_close($link);
?>

