 <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Post-->
      <section class="mt-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Featured Image-->
            <div class="card mb-4 wow fadeIn">
            <?php if(!empty($articles['image'])){?>
              <img src="<?php echo base_url(); ?>assets/img/<?php echo $articles['image']; ?>" class="img-fluid img-id" alt="">
            <?php } else {?>
                <img src="<?php echo base_url(); ?>assets/img/stock.jpeg" class="img-fluid img-id" alt="">
            <?php }?>

            </div>
            <!--/.Featured Image-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <!--Card content-->
              <div class="card-body">

                <p class="h2 my-4"><?php echo $articles['title']; ?></p>

                <?php echo $articles['content']; ?>
              </div>

            </div>
            <!--/.Card-->

            <!--ABOUT THE AUTHOR-->
<!--             <div class="card mb-4 wow fadeIn">
              <div class="card-header font-weight-bold">
                <span>About author</span>
              </div>
              <div class="card-body">
                <div class="media d-block d-md-flex mt-3">
                  <img class="d-flex mb-3 mx-auto z-depth-1" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg"
                    alt="Generic placeholder image" style="width: 100px;">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Caroline Horwitz
                    </h5>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti
                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                    similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                    fuga.
                  </div>
                </div>
              </div>
            </div> -->
            <!--/.Card-->

           

        

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header">Other articles</div>

              <!--Card content-->
              <div class="card-body">

                <ul class="list-unstyled">
                    <?php foreach ($other_articles as $other_article){  ?>
                      <?php if($other_article['status'] == '1'){  ?>
                        <li class="media my-2">
                          <img class="d-flex mr-3 img-id-1" src="<?php echo base_url(); ?>assets/img/<?php echo $other_article['image']; ?>" alt="">
                          <div class="media-body">
                            <a href="<?php echo base_url('articles/'.$other_article['slug']); ?>">
                              <h5 class="mt-0 mb-1 font-weight-bold"><?php echo ucwords($other_article['title']); ?></h5>
                            </a>
                            <?php echo date("F d, Y", strtotime($other_article['timestamp']));?>
                          </div>
                        </li>
                     <?php } } ?>
                </ul>

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Post-->

    </div>
  </main>
  <!--Main layout-->