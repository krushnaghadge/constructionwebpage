<?php
include "navbar.php";
?>


<?php
$data= mysqli_query($conn,"SELECT * FROM customer_quote_request ");





?>


<div class="container-fluid bg-white ">
<form action="save_quote_info.php" method="post" enctype="multipart/form-data">

    <div class="container-fluid bg-white p-3">
    <div class="row">
                <div class="col-md-12 mb-3">
                         <h3> Customer  Quate - Information</h3>
                </div> 
                <div class="col-md-12 ">
                    <table class="table table-borderd table-sm">
                        <tr>
                            <th> SR.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>

                        </tr>
                             <?php
                             foreach($data as $key => $row)
                             {
                                ?>
                                       <tr>
                                           <th> <?=$key +1?></th>
                                           <th><?=$row['name']?></th>
                                           <th><?=$row['email']?></th>
                                           <th><?=$row['phhone']?></th>
                                           <th><?=$row['message']?></th>

                                       </tr>


                                <?php
                             }


                            ?>

                    </table>



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