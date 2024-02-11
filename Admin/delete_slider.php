

<?php
include "connection.php";


extract($_GET);


$sql="DELETE FROM slider_image WHERE slider_image . Slider_img_id = '$id'";
mysqli_query($conn,$sql);



?>

<script type ="text/javascript">

    
     alert("Image delete Sucessfully");
     location.href="slider.php";



</script>

















<?php
include "footer.php";
?>