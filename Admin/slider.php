<?php
include "navbar.php";
?>


<div class="container-fluid bg-white ">
<form action="save_slider.php" method="post" enctype="multipart/form-data">

    <div class="container-fluid bg-white p-3">  
       <h3> Manage Slider</h3>
     
        <div class="row">
       
               <div class="col-md-9 col-xl-10">

                  <lable>Select Lable</lable>
                  <input type="file"  name ="slider_image" class ="form-control" required>
               </div>

                <div class="col-md-3 col-xl-2">
                     <button class="btn btn-primary"> Add image</button>
                </div>
        
        </div>
   </div>
</form>

<div class="container-fluid bg-white p-3">  
     <div class="row">
         <?php
         $slider_data=mysqli_query($conn,"SELECT * FROM slider_image");
             foreach($slider_data as $key => $row)
                {
                    ?>
                        <div class="col-md-3 ">
                           <img src="upload/<?=$row['image']?>"  width="100%"> 
                           <a href="edit_slider.php?id=<?=$row['Slider_img_id']?>">
                           <button class="btn btn-sm btn-primary"> edit</button>
                           </a>
                           <a href="delete_slider.php?id=<?=$row['Slider_img_id']?>" onclick="return confirm('Are You Sure..?') ">
                           <button class="btn btn-sm btn-danger float-end"> delete</button>
                           </a>

                        
                        </div>
                     <?php
                }
          ?>
     </div>
</div>



<?php
   $data =mysqli_query($conn,"SELECT * FROM slider_details");
   $slider_details= mysqli_fetch_assoc($data);

?>
<br>
       
<form action="save_slider_details.php" method="post" enctype="multipart/form-data">

<div class="container-fluid bg-white p-3">  
   <h3> Manage Slider Heading</h3>
 
          <div class="row">
            <div class="col-md-4 ">
                 Title
                  <input type="text"  name ="slider_title" required class ="form-control" value="<?=$slider_details['slider_title']?>">
             </div>
             <div class="col-md-8 ">
                 Description
                 <textarea  name ="slider_description" required class ="form-control"><?=$slider_details['slider_description']?></textarea >
                
             </div>
             <div class="col-md-4 ">
                 Button Text
                 <input  name ="slider_button_text" required class ="form-control" value="<?=$slider_details['slider_button_text']?>">
             </div>
             <div class="col-md-4 ">
                 Button Link
                 <input  name ="slider_button_link" required class ="form-control" value="<?=$slider_details['slider_button_link']?>">
             </div>
             <div class="col-md-4 ">
                <br>
                    <button class="btn btn-sm btn-danger float-end"> Save Details</button>
             </div>
            </div>
</div>




             

<?php
include "footer.php";
?>