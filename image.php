<?php

include "connect.php";


/*$id = $_POST['id'];
$fname =$_POST['fname'];
$lname = $_POST['lname'];
$password =$_POST['password'];
$image = $_POST['image'];*/

$imagename=$_FILES["myimage"]["name"]; 
$Customer_ID = $_POST['Customer_ID'];
//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));



/*if(isset($_POST[‘uploadfilesub’])) {
    //declaring variables
    $filename = $_FILES[‘uploadfile’][‘name’];
    $filetmpname = $_FILES[‘uploadfile’][‘tmp_name’];
    //folder where images will be uploaded
    $folder = ‘imagesuploadedf/’;
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($filetmpname, $folder.$filename);


}*/

/*$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysql_query($insert_image);*/

//$sql="INSERT INTO `registration` (`id`, `fname`, `lname`, `password`, `image`) VALUES ('$id', '$fname', '$lname', '$password', '$filename')";
$insert_image="INSERT INTO `orders`(`OrderN`,`OrderImage`,`Customer_ID`) VALUES('$imagename','$imagetmp','$Customer_ID')";
//$sql ="INSERT INTO `orders`(`Customer_ID`) VALUES ('$Customer_ID')"; /*, `Amount` = '$Amount' , `Order_ID` = '$Order_ID' /*, `username` = '$username', `password` = '$password' WHERE `payments`.`Payment_ID` = $Payment_ID"*/

if(mysqli_query($link, $insert_image)){
    echo "Records edited successfully.";
    header('Location: /project/orderpage.php');

} else{
    echo "ERROR: Not able to execute $insert_image. " . mysqli_error($link);
}
// Close connection
?>