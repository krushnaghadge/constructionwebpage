<?php
include "connection.php";



if($_FILES['slider_image']['name']!="")
{
     extract($_POST);
    $filename=time().$_FILES['slider_image']['name'];
    move_uploaded_file($_FILES['slider_image']['tmp_name'],"upload/".$filename);
    mysqli_query($conn,"UPDATE slider_image SET image='$filename' WHERE Slider_img_id='$Slider_img_id'");
}

?>

<script type ="text/javascript">

    
     alert("Image Updated Sucessfully");
     location.href="slider.php";



</script>