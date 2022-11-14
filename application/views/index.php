
<?php $this->load->view('layout/header'); ?>
  <div id="container">
    <!-- Feature Box Start-->
    <div class="container">&nbsp;</div>
    <!-- Feature Box End-->
    <div class="container"> 
      <div class="row">
        <!-- Left Part Start-->
        <?php $this->load->view('layout/sidebar'); ?>
        <!-- Left Part End-->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <!-- Slideshow Start-->
          <div class="slideshow single-slider owl-carousel">
            <?php $sliders = $this->media->show_all('slideshow'); ?>
            <?php if($sliders): ?>
              <?php  foreach ($sliders as $slider):?>
            <div class="item"> <a href="#"><img class="img-responsive" src="/uploads/<?php echo $slider->media_img; ?>" width="920" height="380" alt="<?php echo $slider->title; ?>" /></a> </div>
          <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No Record Found!</div>
            <?php endif ?>
          </div>
          <!-- Slideshow End-->
          <!-- Featured Product Start-->
          <h3 class="subtitle">DELL</h3>
          <div class="owl-carousel product_carousel">
            <?php $products = $this->product->show_product_by(1); ?>
            <?php if($products): ?>
            <?php  foreach ($products as $product):?>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?php echo '/product/' . $product->slug; ?>"><img src="/uploads/<?php echo $product->product_img; ?>" alt="<?php echo $product->title; ?>" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title; ?></a></h4>
                <p class="price"><span class="price-new">RS. <?php echo number_format($product->price); ?></span></p>
              </div>
            </div>
            <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No Record Found!</div>
            <?php endif ?>
          </div>
          <!-- Featured Product End-->
          <!-- Banner Start-->
          <!-- Banner End-->
          <!-- Categories Product Slider Start-->
          <div class="category-module" id="latest_category">
            <h3 class="subtitle">HP  </h3>
            <div class="category-module-content">
              <div id="tab-cat1" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                  <?php $products = $this->product->show_product_by(2); ?>
                  <?php if($products): ?>
                  <?php  foreach ($products as $product):?>
                  <div class="product-thumb">
                    <div class="image"><a href="<?php echo '/product/' . $product->slug; ?>"><img src="/uploads/<?php echo $product->product_img; ?>" alt="<?php echo $product->title; ?>" class="img-responsive" /></a></div>
                     <div class="caption">
                       <h4><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title; ?></a></h4>
                       <p class="price"> <span class="price-new">RS.<?php echo number_format($product->price); ?></span></p>
                    </div>
                    </div>
                    <?php endforeach ?>
                    <?php else: ?>
                      <div class="alert alert-danger">No Record Found!</div>
                    <?php endif ?>
                </div>
              </div>
            </div>
          </div>
          <!-- Categories Product Slider End-->
          <!-- Banner Start -->
          <!-- Banner End -->
          
          <!-- Categories Product Slider Start -->
          <h3 class="subtitle">APPLE </h3>
          <div class="owl-carousel latest_category_carousel">
           <?php $products = $this->product->show_product_by(3); ?>
           <?php if($products): ?>
           <?php  foreach ($products as $product):?>
            <div class="product-thumb">
              <div class="image"><a href="<?php echo '/product/' . $product->slug; ?>"><img src="/uploads/<?php echo $product->product_img; ?>" alt="<?php echo $product->title; ?>" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title; ?></a></h4>
                <p class="price">RS. <?php echo number_format($product->price); ?></p>
              </div>   
            </div>
            <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No Record Found!</div>
            <?php endif ?>  
          </div>
          <!-- Categories Product Slider End -->
          <!-- Brand Product Slider Start-->
          <h3 class="subtitle">ACER</a></h3>
          <div class="owl-carousel latest_brands_carousel">

           <?php $products = $this->product->show_product_by(4); ?>
           <?php if($products): ?>
           <?php  foreach ($products as $product):?>
            <div class="product-thumb">
              <div class="image"><a href="<?php echo '/product/' . $product->slug; ?>"><img src="/uploads/<?php echo $product->product_img; ?>" alt="<?php echo $product->title; ?>" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title; ?></a></h4>
                <p class="price">RS. <?php echo number_format($product->price); ?></p>
              </div>   
            </div>
            <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No Record Found!</div>
            <?php endif ?>  


          </div>
          <!-- Brand Product Slider End -->
          <!-- Brand Logo Carousel Start-->
          <div id="carousel" class="owl-carousel nxt">
            <?php $brands = $this->brand->show_all(); ?>
            <?php if ($brands): ?>
            <?php foreach ($brands as $brand) : ?>
            <div class="item text-center"> <a href="#"><img src="/uploads/<?php echo $brand->brand_img; ?>" alt="<?php echo $brand->title; ?>" class="img-responsive" /></a> </div>
            <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No record found!</div>
            <?php endif ?>
          </div>
          <!-- Brand Logo Carousel End -->
        </div>
        <!--Middle Part End-->
      </div>
    </div>
  </div>

  <!--Footer Start-->
  <?php $this->load->view('layout/Footer'); ?>
