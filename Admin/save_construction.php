<?php
include "connection.php";
extract($_POST);



$filename=time().$_FILES['constructions_img']['name'];
   move_uploaded_file($_FILES['constructions_img']['tmp_name'],"upload/".$filename);



//$sql="CREATE TABLE servicess(service_id INT PRIMARY KEY AUTO_INCREMENT,service_title TEXT,service_desc TEXT,service_image TEXT)";
$sql="INSERT INTO constructions (headline,details_info,constructions_img) VALUES('$headline','$details_info','$filename')";

mysqli_query($conn,$sql);
   ?>

<script type ="text/javascript">

    
alert("constructions site  Added");
location.href="constructions.php";



</script>