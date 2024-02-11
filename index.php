<?php
include "navbar.php";
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

  <?php
       $data =mysqli_query($conn,"SELECT * FROM slider_details");
       $slider_details= mysqli_fetch_assoc($data);



  ?>
    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down"> <?=$slider_details['slider_title']?></h2>
            <p data-aos="fade-up"><?=$slider_details['slider_description']?></p>
            <a data-aos="fade-up" data-aos-delay="200" href="<?=$slider_details['slider_buttton_link']?>" 
            class="btn-get-started" target="_blank">
              <?=$slider_details['slider_buttton_text']?>
            </a>
          </div>
        </div>
      </div>
    </div>

<?php
     $slider_image=mysqli_query($conn,"SELECT * FROM SLIDER_image") ;

?>
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
<?php
     foreach($slider_image as $key => $row)
     {
     ?>
      <div class="carousel-item <?=($key==0)? 'active':''?>" style="background-image: url('Admin/upload/<?=$row['image']?>')"></div>
        <?php
     }
     ?>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->



  <?php
       $data =mysqli_query($conn,"SELECT * FROM quote_info");
       $quote_det= mysqli_fetch_assoc($data);



  ?>


  <main id="main">




    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3><?=$quote_det['quote_title']?></h3>
              <p><?=$quote_det['quote_desc']?></p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="save_request_quote.php" method="post" >
              <h3>Get a quote</h3>
     <p> enter the detauls our sales representative will contact you soon</p><div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">

                  <button type="submit" class="btn btn-warning">Get a quote</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->

    <?php
       $constructions  =mysqli_query($conn,"SELECT * FROM constructions");
       //$servicess_det= mysqli_fetch_assoc($data);



  ?>
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Constructions</h2>
          <p> view  our constuructio side details</p>
        </div>

        <div class="row gy-4">
        <?php
        foreach($constructions as $key => $row)
        {

        ?>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(Admin/upload/<?=$row['constructions_img']?>);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title"><?=$row['headline']?></h4>
                    <p><?=$row['details_info']?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
            ?>
            <!-- End Card Item -->

          

          

          

        </div>

      </div>
    </section><!-- End Constructions Section -->




    <?php
       $services  =mysqli_query($conn,"SELECT * FROM servicess");
       //$servicess_det= mysqli_fetch_assoc($data);



  ?>




    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          </div>

        <div class="row gy-4">

        <?php
        foreach($services as $key => $row)
        {

        ?>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <img src="Admin/upload/<?=$row['service_image']?>" width="70px" style="z-index : 999; position:relative;">
                <!--<i class="fa-solid fa-mountain-city"></i>-->
              </div>
              <h3> <?=$row['service_title']?></h3>
              <p><?=$row['service_desc']?></p>
            </div>
            </div>
            <?php
            }
            ?>

          <!-- End Service Item -->

          </div>

          

         

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->


    <?php
       $testimonials  =mysqli_query($conn,"SELECT * FROM testimonials");
       //$servicess_det= mysqli_fetch_assoc($data);



  ?>
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

           
          <?php
        foreach($testimonials as $key => $row)
        {

        ?>
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3><?=$row['name']?></h3>
                  <h4><?=$row['job']?></h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <?=$row['review']?> <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
            <!-- End testimonial item -->

           

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    

  </main><!-- End #main -->

  
  <?php
include "footer.php";
?>