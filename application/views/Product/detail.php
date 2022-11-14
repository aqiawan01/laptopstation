
<?php $this->load->view('layout/header'); ?>  

<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="category.html" itemprop="url"><span itemprop="title">Electronics</span></a></li>
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="product.html" itemprop="url"><span itemprop="title"><?php echo $product->title; ?></span></a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <div itemscope itemtype="http://schema.org/Product">
            <h1 class="title" itemprop="name"><?php echo $product->title; ?></h1>
            <div class="row product-info">
              <div class="col-sm-6">
                <div class="image">
                  <img class="img-responsive" itemprop="image" id="zoom_01" src="/uploads/<?php echo $product->product_img; ?>" width="350" height="350" alt="<?php echo $product->title; ?>" data-zoom-image="/assets/image/product/macbook_air_1-500x500.jpg" /> 
                </div>
                <div class="center-block text-center"><span class="zoom-gallery"><i class="fa fa-search"></i> Click image for Gallery</span></div>
                <div class="image-additional" id="gallery_01"> 
                  <?php $galleries = $this->gallery->get_galleries_by($product->id); ?>
                  <?php if($galleries): ?>
                    <?php foreach ($galleries as $gallery) : ?>
                       <a class="thumbnail" href="#"> <img src="/uploads/<?php echo $gallery->gallery_img; ?>" width="66" height="66" alt = "<?php echo $product->title; ?>"/></a> 
                    <?php endforeach  ?>
                      <?php else: ?>
                        <div class="alert alert-danger">No Gallery Found!</div>
                      <?php endif ?>
                    </div>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled description">
                  <li><b>Brand:</b> <a href="#"><span itemprop="brand"><?php echo $brand_array[$product->brand_id]; ?></span></a></li>
                  <li><b>Product Code:</b> <span itemprop="mpn"><?php echo $product->code; ?></span></li>
                  <li><b>Views:</b> <?php echo $product->views; ?></li>
                </ul>
                <ul class="price-box">
                  <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer"> <span itemprop="price">RS.<?php echo number_format($product->price); ?><span itemprop="availability" content="In Stock"></span></span></li>
                </ul>
                
                <hr>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style"> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest" pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a> <a class="addthis_counter addthis_pill_style"></a> </div>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514863386b357649"></script>
                <!-- AddThis Button END -->
              </div>
            </div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
              <li><a href="#tab-specification" data-toggle="tab">Specification</a></li>
              <li><a href="#tab-review" data-toggle="tab">Reviews (2)</a></li>
            </ul>
            <div class="tab-content">
              <div itemprop="description" id="tab-description" class="tab-pane active">
                <div>
                  <?php echo $product->description; ?>
                </div>
              </div>
              <div id="tab-specification" class="tab-pane">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td width="150"><strong>Processor Type</strong></td>
                      <td><strong><?php echo $product->processor_type; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Processor Speed</strong></td>
                      <td><strong><?php echo $product->processor_speed; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Hard Drive Size</strong></td>
                      <td><strong><?php echo $product->hard_drive_size; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Installed Ram</strong></td>
                      <td><strong><?php echo $product->installed_ram; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Screen Size</strong></td>
                      <td><strong><?php echo $product->screen_size; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Camera</strong></td>
                      <td><strong><?php echo $product->camera; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Color</strong></td>
                      <td><strong><?php echo $product->color; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>OS System</strong></td>
                      <td><strong><?php echo $product->operating_system; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Bluetooth</strong></td>
                      <td><strong><?php echo $product->bluetooth; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Wifi</strong></td>
                      <td><strong><?php echo $product->wifi; ?></strong></td>
                    </tr>

                    <tr>
                      <td width="150"><strong>Lan</strong></td>
                      <td><strong><?php echo $product->lan; ?></strong></td>
                    </tr>
                    <tr>
                      <td width="150"><strong>Modem</strong></td>
                      <td><strong><?php echo $product->modem; ?></strong></td>
                    </tr>
                  </thead>
                  </table>
                <table class="table table-bordered">
                <thead>
                    <tr>
                      <td colspan="2"><strong>Processor</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>No. of Cores</td>
                      <td>1</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="tab-review" class="tab-pane">
                <?php
                  $attributes = [ 'name' => 'formAdd', 'id' => 'formAdd']; 
                  $hidden = array('id' => $product->id);
                  echo form_open_multipart('', $attributes,  $hidden);
                ?>
                <div class="form-horizontal">
                  <?php if($reviews): ?>
                    <?php foreach ($reviews as $review) : ?>
                  <div id="review">
                    <div>
                      <table class="table table-striped table-bordered">
                        <tbody>
                          <tr>
                            <td style="width: 50%;"><strong><span><?php echo $review->fullname; ?></span></strong></td>
                            <td class="text-right"><span><?php echo $review->create_date; ?></span></td>
                          </tr>
                          <tr>
                            <td colspan="2"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="text-right"></div>
                  </div>
                  <?php endforeach  ?>
                      <?php else: ?>
                        <div class="alert alert-danger">No Gallery Found!</div>
                      <?php endif ?>

                  <h2>Write a review</h2>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label for="input-name" class="control-label">Your Name</label>
                      <input type="text" class="form-control" id="fullname" value="" name="fullname">
                    </div>
                  </div>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label for="input-name" class="control-label">Your Email</label>
                      <input type="text" class="form-control" id="email" value="" name="email">
                    </div>
                  </div>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label for="input-review" class="control-label">Your Review</label>
                      <textarea class="form-control" id="review" rows="5" name="review"></textarea>
                      <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label class="control-label">Rating</label>
                      &nbsp;&nbsp;&nbsp; Bad&nbsp;
                      <input type="radio" value="1" name="rating">
                      &nbsp;
                      <input type="radio" value="2" name="rating">
                      &nbsp;
                      <input type="radio" value="3" name="rating">
                      &nbsp;
                      <input type="radio" value="4" name="rating">
                      &nbsp;
                      <input type="radio" value="5" name="rating">
                      &nbsp;Good</div>
                  </div>
                  <div class="buttons">
                    <div class="pull-right">
                      <button class="btn btn-primary" id="button-review" type="submit">Continue</button>
                    </div>
                  </div>
                </div>
                 <?php echo form_close(); ?>
              </div>
            </div>

            <h3 class="subtitle">Related Products</h3>
            <div class="owl-carousel related_pro">
               <?php if ($relatedProducts): ?>
              <?php foreach ($relatedProducts as $relatedProduct) : ?>
              <div class="product-thumb">
               <div class="image"><a href="<?php echo '/product/' . $relatedProduct->slug; ?>"><img src="/uploads/<?php echo $relatedProduct->product_img; ?>" width="200" height="200 "alt="<?php echo $relatedProduct->title; ?>" class="img-responsive" /></a></div>
                <div class="caption">
                  <h4><a href="<?php echo '/product/' . $relatedProduct->slug; ?>"><?php echo $relatedProduct->title; ?></a></h4>
                  <p class="price"> <span class="price-new">Rs. <?php echo number_format($relatedProduct->price); ?></span></p>
                </div>
              </div>
           <?php endforeach ?>
            <?php endif ?>
            
            </div>
          </div>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
    <?php $this->load->view('layout/sidebar'); ?>  

        <!--Right Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
 
  <?php $this->load->view('layout/footer'); ?>  
