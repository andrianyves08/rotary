<?php $base =base_url();?><main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">

    <!-- Heading -->
      <div class="card mb-4 wow fadeIn">
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">
          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="index.php">Home Page</a>
            <span>/</span>
            <span>Articles</span>
          </h4>
        </div>
      </div>
      <!-- Heading -->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
          <!--Card content-->
            <div class="card-body">
              <table class="table table-bordered display table-responsive-md" cellspacing="0" width="100%">
                  <thead>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Last Updated</th>
                  <th>Upload By</th>
                  <th></th>
                  </thead>
                  <tbody>
                    <?php foreach ($articles as $article){  ?>
                    <tr>
                      <td><?php echo $article['title'];?></td>
                      <td>
                        <?php if($article['status'] == 1){?>
                          <span class="badge badge-success badge-pill pull-right">Enabled</span>
                        <?php } else {?>
                          <span class="badge badge-danger badge-pill pull-right">Disabled</span>
                        <?php } ?>
                      </td>
                      <td><?php echo date("F d, Y H:i", strtotime($article['timestamp']));?></td>
                      <td><?php echo $article['adminID'];?></td>
                      <td><a class="btn btn-sm btn-primary" data-toggle='modal' data-target='#edit<?php echo $article['id']; ?>' href='#edit?id=<?php echo $article['id']; ?>'><i class="fas fa-edit" aria-hidden="true"></i> Edit</a></td>
                    </tr>
                    <div class="modal fade" id="edit<?php echo $article['id']; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                          <h4 class="modal-title w-100 font-weight-bold"><?php echo ucwords($article['title']);?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
                          </span></button>
                        </div>

                        <div class="modal-body mx-3">
                          <?php echo form_open_multipart('admin/update/'.$article['id']); ?>
                          <?php if(!empty($article['image'])){?>
                            <img class="center mb-3 animated rotateIn img-id" style="width: 150px; height: 150px;" src="<?php echo base_url(); ?>assets/img/<?php echo $article['image']; ?>">
                          <?php } ?>
                          <input type="hidden" name="id" class="form-control validate" value="<?php echo $article['id']; ?>" required>
                          <div class="form-group">
                            <label for="edittitle">* Title</label>
                            <input type="text" class="form-control" name="edittitle" value="<?php echo $article['title']; ?>">
                          </div>
                          <label for="editbanner">Banner</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="editbanner" name="editbanner" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label text-left" for="editbanner"><?php echo $article['image']?></label>
                            </div>
                          </div>
                          <br>
                          <label for="editstatus">* Status</label><br>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                              <?php if($article['status'] == '1'){ ?>
                                <label class="btn btn-danger form-check-label">
                                <input type="hidden" name="editstat" value="1">
                                <input class="form-check-input" type="radio" name="editstatus" value="2">Disable</label>
                              <?php } else {?>
                                <label class="btn btn-success form-check-label">
                                <input type="hidden" name="editstat" value="2">
                                <input class="form-check-input" type="radio" name="editstatus" value="1">Enable</label>
                              <?php } ?>
                            </div>
                          <br>
                          <br>
                          <label for="content">* Content</label>
                          <textarea name="editcontent" id="content<?php echo $article['id']; ?>" rows="10" cols="80"><?php echo $article['content'];?>
                          </textarea>
                          <?php
                            echo "<script>CKEDITOR.replace('content".$article['id']."', {
                            filebrowserBrowseUrl: '$base/admin/gallery',
                            filebrowserUploadUrl: '$base/assets/admin/plugins/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserWindowWidth: '1000',
                            filebrowserWindowHeight: '300'
                            } );</script>";
                          ?> 
                        </div>

                        <div class="modal-footer justify-content-center">
                          <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Cancel</button>
                          <button class="btn btn-outline-primary waves-effect">Update Article</button>
                          <?php echo form_close(); ?>
                        </div>

                        </div>
                      </div>
                    </div>
                   

                    <?php } ?>
                  </tbody>
              </table>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createnews">Create Articles</button>
            </div>
          </div>
        </div>
      </div>


  </div><!--Container-->
</main><!--Main laypassed out-->

<!-- Are you sure -->

<div class="modal fade" id="createnews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">
        <?php echo form_open_multipart('admin/articles'); ?>
        <div class="form-group">
          <label for="formGroupExampleInput">* Title</label>
          <input type="text" class="form-control" name="title" required>
        </div>
        <label for="image">Banner</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="banner" name="banner" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label text-left" for="banner">Upload Photo</label>
          </div>
        </div>
        <br>
        <label for="formGroupExampleInput">* Status</label>
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="status" name="status" enable>
          <label class="custom-control-label" for="status">Enable</label>
        </div>
        <br>
        <label for="formGroupExampleInput">* Content</label>
          <textarea name="content" id="content" rows="10" cols="80">
         </textarea>
          <script>CKEDITOR.replace('content', {
          filebrowserBrowseUrl: '<?php echo base_url(); ?>admin/gallery',
          filebrowserUploadUrl: '<?php echo base_url(); ?>assets/admin/plugins/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
          filebrowserWindowWidth: '1000',
          filebrowserWindowHeight: '300'
          } );</script> 
      </div>

      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Cancel</button>
        <button class="btn btn-outline-primary waves-effect" name="editcontent" id="editcontent">Add Content</button>
        <?php echo form_close(); ?>
      </div>

    </div>
  </div>
</div>

<?php echo validation_errors(); ?>