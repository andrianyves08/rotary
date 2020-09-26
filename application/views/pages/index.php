  

     <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-end align-items-center">
            <div class="col-3" style="background: rgba(255, 255, 255, 0.8); height: 100%;">
              <!-- Content -->
              <div class="text-right dark-text mx-5 mt-5 pt-5 wow fadeIn" style="opacity: 100%;">
                <h3 class="mb-4">
                  <strong>Learn Bootstrap 4 with MDB</strong>
                </h3>

                <p>
                  <strong>Best & free guide of responsive web design</strong>
                </p>

                <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-primary btn-sm tn-lg">Start
                  free tutorial
                  <i class="fas fa-graduation-cap ml-2"></i>
                </a>
              </div>
              <!-- Content -->
            </div>
          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-end align-items-center">
            <div class="col-3" style="background: white; opacity: 80%; height: 100%;">
              <!-- Content -->
              <div class="text-right dark-text mx-5 mt-5 pt-5 wow fadeIn">
                <h3 class="mb-4">
                  <strong>Learn Bootstrap 4 with MDB</strong>
                </h3>

                <p>
                  <strong>Best & free guide of responsive web design</strong>
                </p>

                <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-primary btn-sm tn-lg">Start
                  free tutorial
                  <i class="fas fa-graduation-cap ml-2"></i>
                </a>
              </div>
              <!-- Content -->
            </div>
          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/79.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-end align-items-center">
            <div class="col-3" style="background: white; opacity: 80%; height: 100%;">
              <!-- Content -->
              <div class="text-right dark-text mx-5 mt-5 pt-5 wow fadeIn">
                <h3 class="mb-4">
                  <strong>Learn Bootstrap 4 with MDB</strong>
                </h3>

                <p>
                  <strong>Best & free guide of responsive web design</strong>
                </p>

                <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-primary btn-sm tn-lg">Start
                  free tutorial
                  <i class="fas fa-graduation-cap ml-2"></i>
                </a>
              </div>
              <!-- Content -->
            </div>
          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

          <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

    </div>
    <!--/.Slides-->

  </div>
  <!--/.Carousel Wrapper-->

  <main>
    <div class="container">

<section class="mt-5 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

    <!--Grid row-->
    <div class="row mb-4 wow fadeIn">
    <?php foreach ($articles as $article){  ?>
      <?php if($article['status'] == '1'){  ?>
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                    <img src="<?php echo base_url(); ?>assets/img/<?php echo $article['image']; ?>" class="card-img-top" alt="">
                    <a href="<?php echo base_url('articles/'.$article['slug']); ?>" target="_blank">
                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title"><?php echo ucwords($article['title']); ?></h4>
                    <!--Text-->
                    <p class="card-text"><?php echo date("F d, Y", strtotime($article['timestamp']));?> </p>
                    <a href="<?php echo base_url('articles/'.$article['slug']); ?>" class="btn btn-primary btn-md waves-effect waves-light">View More
                    </a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

     <?php } } ?>
    </div>
    <!--Grid row-->

    <!--Pagination-->
    <nav class="d-flex justify-content-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <ul class="pagination pg-blue">
          <?php echo $this->pagination->create_links(); ?>
        </ul>
    </nav>
    <!--Pagination-->

</section>

</div>
</main>