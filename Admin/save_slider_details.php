<?php
//echo "<pre>";
extract($_POST);
//here we are created table to save data 
//$sql = "CREATE TABLE slider_details(slider_details_id INT PRIMARY KEY AUTO_INCREMENT,slider_title VARCHAR (200),slider_description TEXT,slider_button_text VARCHAR (200),slider_button_link TEXT)";


//here we are inserting some values
//$sql="INSERT INTO slider_details(slider_title,slider_description,slider_button_text,slider_button_link) VALUES('$slider_title','$slider_description','$slider_button_text','$slider_button_link')";

$sql="UPDATE slider_details SET slider_title='$slider_title',slider_description='$slider_description',slider_button_text='$slider_button_text',slider_button_link='$slider_button_link'";




include "connection.php";
mysqli_query($conn,$sql);



?>


<script type ="text/javascript">

    
     alert("Details Updated Sucessfully");
     location.href="slider.php";



</script>