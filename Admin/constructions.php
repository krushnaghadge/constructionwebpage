<?php
include "navbar.php";
?>
<div class="container-fluid bg-white ">
<form action="save_construction.php" method="post" enctype="multipart/form-data">

    <div class="container-fluid bg-white p-3">
    <div class="row">
                <div class="col-md-12 mb-3">
                         <h3> Manage Servicess</h3>
                </div> 

                <div class="col-md-6 mb-3">
                      Enter contruction Title
                      <input type="text"  name ="headline" class ="form-control" > 
               </div>

               <div class="col-md-6 mb-3">
                      Enter constructions img
                      <input type="file"  name ="constructions_img" class ="form-control" > 
               </div>

               <div class="col-md-12 mb-3">
                      construction Description
                      <textarea  name ="details_info" class ="form-control" >  </textarea>
                </div>

               <div class="col-md-12 mb-3 text-end">
                     <button class="btn btn-primary"> Save concstruction</button>
               </div>
                
        
    
        </div>
   </div>
</form>
</div>
<?php
include "footer.php";
?>