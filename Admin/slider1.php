      
<form action="save_slider_details.php" method="post" enctype="multipart/form-data">

<div class="container-fluid bg-white p-3">  
   <h3> Manage Slider Heading</h3>
 
          <div class="row">
            <div class="col-md-4 ">
                 Title
                  <input type="text"  name ="slider_title" required class ="form-control" value="<?=$slider_title['slider_title']?>">
             </div>
             <div class="col-md-8 ">
                 Description
                 <textarea  name ="slider_description" required class ="form-control"><?=$slider_description['slider_description']?></textarea >
                
             </div>
             <div class="col-md-4 ">
                 Button Text
                 <input  name ="slider_button_text" required class ="form-control" value="<?=$slider_button_text['slider_button_text']?>">
             </div>
             <div class="col-md-4 ">
                 Button Link
                 <input  name ="slider_button_link" required class ="form-control" value="<?=$slider_button_link['slider_button_link']?>">
             </div>
             <div class="col-md-4 ">
                <br>
                    <button class="btn btn-sm btn-danger float-end"> Save Details</button>
             </div>
            </div>
</div>
