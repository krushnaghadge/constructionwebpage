<?php
include "connection.php";
extract($_POST);



$filename=time().$_FILES['reviever']['name'];
   move_uploaded_file($_FILES['reviever']['tmp_name'],"upload/".$filename);



$sql="INSERT INTO testimonials (name,review,reviever,job) VALUES('$name','$review','$filename','$job')";

mysqli_query($conn,$sql);
   ?>

<script type ="text/javascript">

    
alert("testimonials site  Added");
location.href="testmonial.php";



</script>