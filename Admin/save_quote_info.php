<?php

extract($_POST);
include "connection.php";



//$sql="CREATE TABLE quote_info(quote_info_id INT PRIMARY KEY AUTO_INCREMENT,quote_title TEXT,quote_desc TEXT)";
//$sql="INSERT INTO quote_info (quote_title,quote_desc) VALUES('$quote_title','$quote_desc')";


$sql="UPDATE quote_info SET quote_title='$quote_title',quote_desc='$quote_desc'";


mysqli_query($conn,$sql);

?>
<script type ="text/javascript">

    
     alert("Details Updated Sucessfully");
     location.href="getquote.php";



</script>












?>