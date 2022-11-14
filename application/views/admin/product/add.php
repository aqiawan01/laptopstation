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
          echo form_open_multipart('', $attributes);
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
              <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
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
                        <select name="brand_id" id="brand_id" class="form-control">
                          <option value="0">:: Select Brand ::</option>
                          <?php foreach ($brands as $brand): ?>
                            <option value="<?php echo $brand->id; ?>"><?php echo $brand->title; ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="title" id="title" type="text"  class="form-control <?php echo form_error('title') ? 'error' : NULL ?>" placeholder="Title" value="<?php echo set_value('title'); ?>">
                        <?php echo form_error('title','<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="slug" id="slug" type="text"  class="form-control <?php echo form_error('slug') ? 'error' : NULL ?>" placeholder="Slug" value="<?php echo set_value('slug'); ?>">
                        <?php echo form_error('slug','<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="code" id="code" type="text"  class="form-control" placeholder="Code" value="<?php echo set_value('code'); ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="product_condition" id="product_condition" type="text"  class="form-control" placeholder="Condition" value="<?php echo set_value('product_condition'); ?>">
                      </div>
                    </div>  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="price" id="price" type="text"  class="form-control" placeholder="Price" value="<?php echo set_value('price'); ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <textarea name="descriptions" id="descriptions" rows="8" class="form-control" placeholder="Descriptions">value="<?php echo set_value('descriptions'); ?>"</textarea>
                        
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
        
                  <h4>Postal Information</h4>
                  <div class="row form-row">
                      <div class="col-md-12">
                        <input name="product_img" id="product_img" type="file"  class="form-control">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <textarea name="meta_descriptions" id="meta_descriptions" rows="8" class="form-control" placeholder="Meta Descriptions"><?php echo set_value('meta_descriptions'); ?></textarea>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input type="text" name="meta_keyword" id="meta_keyword" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="<?php echo set_value('meta_keyword'); ?>">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
       <div class="form-actions">
          <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
          <a href="/admin/product/" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
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