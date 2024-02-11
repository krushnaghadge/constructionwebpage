<?php
include "navbar.php";
?>
<div class="container-fluid bg-white ">
<form action="save_testmonial.php" method="post" enctype="multipart/form-data">

    <div class="container-fluid bg-white p-3">
    <div class="row">
                <div class="col-md-12 mb-3">
                         <h3> Manage Testmonial</h3>
                </div> 

                <div class="col-md-6 mb-3">
                      Enter Name 
                      <input type="text"  name ="name" class ="form-control" > 
               </div>

               <div class="col-md-6 mb-3">
                      Enter  img
                      <input type="file"  name ="reviever" class ="form-control" > 
               </div>

               <div class="col-md-6 mb-3">
               review field
                      <textarea  name ="review" class ="form-control" >  </textarea>
                </div>
                <div class="col-md-6 mb-3">
                      job role
                      <textarea  name ="details_info" class ="form-control" >  </textarea>
                </div>

               <div class="col-md-12 mb-3 text-end">
                     <button class="btn btn-primary"> Save Testmonial</button>
               </div>
                
        
    
        </div>
   </div>
</form>
</div>
<?php
include "footer.php";
?>