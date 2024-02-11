<?php
include "navbar.php";
?>
<div class="container-fluid bg-white ">
<form action="save_service.php" method="post" enctype="multipart/form-data">

    <div class="container-fluid bg-white p-3">
    <div class="row">
                <div class="col-md-12 mb-3">
                         <h3> Manage Servicess</h3>
                </div> 

                <div class="col-md-6 mb-3">
                      Enter service Title
                      <input type="text"  name ="service_title" class ="form-control" > 
               </div>

               <div class="col-md-6 mb-3">
                      Enter service image
                      <input type="file"  name ="service_image" class ="form-control" > 
               </div>

               <div class="col-md-12 mb-3">
                      Service Description
                      <textarea  name ="service_desc" class ="form-control" >  </textarea>
                </div>

               <div class="col-md-12 mb-3 text-end">
                     <button class="btn btn-primary"> Save Service</button>
               </div>
                
        
    
        </div>
   </div>
</form>
</div>
<?php
include "footer.php";
?>