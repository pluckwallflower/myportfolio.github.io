<?php
include('includes/header.php')
?>
</head>

<body>

  <?php
  include('includes/navbar.php')
  ?>

  <main id="main">

    <section class="section">
      <div class="container">
        <div class="row mb-4 align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Work Single Page</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis explicabo inventore.</p>
          </div>
        </div>
      </div>

      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="assets/img/branding_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="sticky-content">
                <h3 class="h3">Taste Ukhrul</h3>
                <p class="mb-4"><span class="text-muted">Branding</span></p>

                <div class="mb-5">
                  <p>Packaging and branding for Taste Ukhrul. A local MSME from Ukhrul Town.</p>

                </div>

                <h4 class="h4 mb-3">What I did</h4>
                <ul class="list-unstyled list-line mb-5">
                  <li>Designed a mockup and packaging in Photoshop. Photographed the end product.</li>
                </ul>

                <p><a href="#" class="readmore">Visit Website</a></p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section class="section pt-0">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                      explicabo inventore.</p>
                  </blockquote>
                  <p>&mdash; Jean Hicks</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                      explicabo inventore.</p>
                  </blockquote>
                  <p>&mdash; Chris Stanworth</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <?php
    include('includes/footer.php');
  ?>

</body>

</html>