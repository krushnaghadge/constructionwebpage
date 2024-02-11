<?php
include "navbar.php";
?>
<?php
extract($_GET);
$sql="SELECT * FROM slider_image WHERE Slider_img_id ='$id'";
$data =mysqli_query($conn,$sql);
$slider_data=mysqli_fetch_assoc($data);





?>

<form action="save_updated_img.php" method="post" enctype="multipart/form-data">
     <input type="hideen" name="Slider_img_id" value="<?=$slider_data['Slider_img_id']?>">
<div class="container-fluid bg-white p-3">  
        <div class="row">
            <div class="col-md-12">
                 <h3> Edit  Slider Image</h3>
            </div>

            <div class="col-md-9 col-xl-10">

                  <lable>Select New Image</lable>
                  <input type="file"  name ="slider_image" class ="form-control">
                  <img src="upload/<?=$slider_data['image']?>" width="100">;
               </div>

                <div class="col-md-3 col-xl-2">
                     <button class="btn btn-primary"> Update image</button>
        
    
    
                </div>





        </div>
</div>



















<?php
include "footer.php";
?>