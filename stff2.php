<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <BODY>
        <?php
            while($row = mysqli_fetch_array($result)) {
            ?>
                <img src="StaffImageView.php?image_id=<?php echo $row["Order_ID"]; ?>" /><br/>
            
        <?php		
            }
            mysqli_close($link);
        ?>
        </BODY>
</body>
</html>