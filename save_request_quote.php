<?php

include "Admin/connection.php";
extract($_POST);


//$sql="CREATE TABLE customer_quote_request(customer_quote_request_id INT PRIMARY KEY AUTO_INCREMENT,name VARCHAR(200),email VARCHAR(200),phone VARCHAR(200),message TEXT)";
$sql="INSERT INTO customer_quote_request (name,email,phone,message) VALUES('$name','$email','$phone','$message')";


mysqli_query($conn,$sql);



?>
<script type ="text/javascript">

    
alert("Thanks for Your Request");
location.href="index.php";



</script>