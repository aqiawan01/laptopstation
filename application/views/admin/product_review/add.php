    <div class="page-content"> 
    <div class="content">  
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">  
        <h2><?php echo $title; ?></h2>   
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <?php
        $attributes = ['name'=>'formAdd','id'=>'formAdd'];
        echo form_open('', $attributes); 
      ?>
        <div class="col-md-14">
              <div class="grid simple">
                <div class="grid-body no-border">
            <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              &nbsp;
            </div>
            <div class="grid-body no-border">
              <?php if (validation_errors()) : ?>
                <div class="alert alert-danger">
                  <?php echo validation_errors(); ?>
                </div>
              <?php endif ?>
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="create_date" id="create_date" type="text"  class="form-control <?php echo form_error('create_date') ? 'error' : NULL ?>" placeholder="Create Date" value="<?php echo set_value('create_date'); ?>">
                        <?php echo form_error('create_date','<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="fullname" id="fullname" type="text"  class="form-control <?php echo form_error('fullname') ? 'error' : NULL ?>" placeholder="fullname" value="<?php echo set_value('fullname'); ?>">
                        <?php echo form_error('fullname','<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="email" id="email" type="text"  class="form-control <?php echo form_error('email') ? 'error' : NULL ?>" placeholder="Email"value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email','<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="review" id="review" type="text"  class="form-control" placeholder="review" value="<?php echo set_value('review'); ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <textarea name="status" id="status" rows="8" class="form-control" placeholder="status"><?php echo set_value('status'); ?></textarea>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
       <div class="form-actions">
          <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
          <a href="/admin/product_comment/" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
        </div>
        </div>
      </div>
                </div>
              </div>
        </div>
        <?php echo form_close(); ?>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>


