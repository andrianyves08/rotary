<div class="container">

  <!--Section: Content-->
  <section class="p-3 my-md-3 text-center">
      <div class="row">
        <div class="col-md-5 mx-auto">
          <!-- Material form login -->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <!-- Form -->
<?php echo form_open('admin/login'); ?>
                          <div class="text-center">
            <img style="height:150px;width:150px" alt="Logo" src="<?php echo base_url(); ?>assets/img/logo.png">
        </div><br>

                <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Log In</h3>

                <input type="text" id="email" name="email" placeholder="Email" class="form-control mb-4">

                <!-- Password -->
                <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Password">

                <div class="text-center">
                  <button type="submit" name="login" class="btn btn-primary btn-rounded my-4 waves-effect">Login</button>
                </div>

              <?php echo form_close(); ?>

            </div>

          </div>
          <!-- Material form login -->
        </div>
      </div>

  </section>
  <!--Section: Content-->


<?php echo validation_errors(); ?>
</div>

