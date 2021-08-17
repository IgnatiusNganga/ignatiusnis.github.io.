<?php
include "connect.php";

$Customer_ID = $_GET['Customer_ID'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$PhoneNumber = $_POST['PhoneNumber'];


 
// Attempt insert query execution
$sql = "INSERT INTO customer (first_name, last_name, PhoneNumber , PaymentStatus) VALUES ('$firstName', '$lastName', '$PhoneNumber' , 'Not yet approved')";

if(mysqli_query($link, $sql)){
    
    /*$yes = "SELECT Customer_ID FROM customer where Date= NOW()";
            $result = $link->query($yes);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Customer_ID"];}
            echo "</table>";
            } else { echo "0 results"; }
            //$conn->close();*/
            
    echo "Records inserted successfully.";
   header('Location: /project/CustomerID.php');
    
	//document.getElementbyID "Customer_ID";

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>





