<?php
include "connection.php";
//$conn=mysqli_connect('localhost','root','','construction');




   $filename=time().$_FILES['slider_image']['name'];
   move_uploaded_file($_FILES['slider_image']['tmp_name'],"upload/".$filename);



//$sql="CREATE TABLE slider_image(Slider_img_id INT PRIMARY KEY AUTO_INCREMENT,image TEXT)";

 
$sql="INSERT INTO slider_image(image) VALUES('$filename')";

//mysqli_query($conn,$sql);
$res=mysqli_query($conn,$sql);



?>

<script type ="text/javascript">

    
     alert("Image Added Sucessfully");
     location.href="slider.php";



</script>