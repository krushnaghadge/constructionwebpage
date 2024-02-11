<?php
include "connection.php";
extract($_POST);



$filename=time().$_FILES['service_image']['name'];
   move_uploaded_file($_FILES['service_image']['tmp_name'],"upload/".$filename);



//$sql="CREATE TABLE servicess(service_id INT PRIMARY KEY AUTO_INCREMENT,service_title TEXT,service_desc TEXT,service_image TEXT)";
$sql="INSERT INTO servicess (service_title,service_desc,service_image) VALUES('$service_title','$service_desc','$filename')";

mysqli_query($conn,$sql);
   ?>

<script type ="text/javascript">

    
alert("servicess  Added");
location.href="servicess.php";



</script>