<?php 
// Include the database configuration file  
//require_once 'connect.php'; 
 
// Get image data from database 
//$result = $link->query("SELECT OrderImage FROM order ORDER BY uploaded_on DESC"); 
?>

<?php 

require_once "connect.php";
if(isset($_GET['Order_ID'])) {
    $sql = "SELECT OrderImage,OrderN FROM order WHERE Order_ID=" . $_GET['Order_ID'];
    $result = mysqli_query($link, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($link));
    $row = mysqli_fetch_array($result);
    header("Content-type: " . $row["OrderN"]);
    echo $row["OrderImage"];
    
            while($row = mysqli_fetch_array($result)) {
            ?>
                <img src="data:image/jpeg/png/jpg;charset=utf8;base64,'.base64_encode( $row['OrderImage']; ?>" /><br/>
            
        <?php		
}
mysqli_close($link);



/*$db = mysqli_connect("localhost","root","","project"); //keep your db name
$sql = "SELECT * FROM order WHERE Order_ID = 7";
$sth = $db->query($sql);
$result=mysqli_fetch_array($db,$sth);
echo '<img src="data:image/jpeg/png/jpg;charset=utf8;base64,'.base64_encode( $result['OrderImage'] ).'"/>';*/
?>
<?php
/*if($result->num_rows > 0){  ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg/png/jpeg;charset=utf8;base64,<?php echo base64_encode($row['OrderImage']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>*/ 