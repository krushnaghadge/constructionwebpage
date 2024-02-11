<?php
include "navbar.php";

$sql= "SELECT * FROM quote_info ";
$res=mysqli_query($conn,$sql);
$quote_det=mysqli_fetch_assoc($res);

?>
<div class="container-fluid bg-white ">
<form action="save_quote_info.php" method="post" enctype="multipart/form-data">

    <div class="container-fluid bg-white p-3">
    <div class="row">
                <div class="col-md-12 mb-3">
                         <h3> Manage Get A Quate - Information</h3>
                </div> 

                <div class="col-md-12 mb-3">
                      Enter  Title
                      <input type="text"  name ="quote_title" class ="form-control" value=<?=$quote_det['quote_title']?>> 
               </div>

               <div class="col-md-12 mb-3">
                      Quates Description
                      <textarea  name ="quote_desc" class ="form-control" ><?=$quote_det['quote_desc']?>  </textarea>
                </div>

               <div class="col-md-12 mb-3 text-end">
                     <button class="btn btn-primary"> Save Information</button>
               </div>
                
        
    
        </div>
   </div>
</form>
</div>



























<?php
include "footer.php";
?>