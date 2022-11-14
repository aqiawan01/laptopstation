
    <div class="page-content"> 
    <div class="content">  
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">  
        <h2><?php echo $title; ?></h2>   
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <?php
         $attributes =['name'=>'formAdd','id'=>'formAdd'];
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
                        <input name="processor_type" id="processor_type" type="text"  class="form-control <?php echo form_error('processor_type') ? 'error' : NULL ?>" placeholder="Processor Type" value="<?php echo set_value('processor_type'); ?>">
                        <?php echo form_error('processor_type','<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="processor_speed" id="processor_speed" type="text"  class="form-control <?php echo form_error('processor_speed') ? 'error' : NULL ?>" placeholder="Processor Speed" value="<?php echo set_value('processor_speed'); ?>">
                        <?php echo form_error('processor_speed','<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="hard_drive_size" id="hard_drive_size" type="text"  class="form-control <?php echo form_error('hard_drive_size') ? 'error' : NULL ?>" placeholder="Harddrive Size"value="<?php echo set_value('hard_drive_size'); ?>">
                        <?php echo form_error('hard_drive_size','<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="installed_ram" id="installed_ram" type="text"  class="form-control <?php echo form_error('installed_ram') ? 'error' : NULL ?>" placeholder="Installed Ram" value="<?php echo set_value('installed_ram'); ?>">
                        <?php echo form_error('installed_ram','<div class="alert alert-danger">','</div>') ?>
                      </div>
                    </div>  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="screen_size" id="screen_size" type="text"  class="form-control" placeholder="Screen Size" value="<?php echo set_value('screen_size'); ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="camera" id="camera" type="text"  class="form-control" placeholder="camera" value="<?php echo set_value('camera'); ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="color" id="color" type="text"  class="form-control" placeholder="available_color" value="<?php echo set_value('color'); ?>">
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
        
                  <h4>Basic Information</h4>
                  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="operating_system" id="operating_system" type="text"  class="form-control" placeholder="os_primary" value="<?php echo set_value('operating_system'); ?>">
                      </div>
                    </div>
                   <div class="row form-row">
                      <div class="col-md-12">
                        <input name="bluetooth" id="bluetooth" type="text"  class="form-control" placeholder="Bluetooth" value="<?php echo set_value('bluetooth'); ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="wifi" id="wifi" type="text"  class="form-control" placeholder="Wifi" value="<?php echo set_value('wifi'); ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="lan" id="lan" type="text"  class="form-control" placeholder="Lan" value="<?php echo set_value('lan'); ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="modem" id="modem" type="text"  class="form-control" placeholder="Modem" value="<?php echo set_value('modem'); ?>">
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