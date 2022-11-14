
<?php $this->load->view('layout/header'); ?>
  <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="category.html"><?php echo $title; ?></a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Left Part Start -->
        <?php $this->load->view('layout/sidebar'); ?>

        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title"><?php echo $title; ?></h1>
          <div class="row products-category">
            <?php if ($products): ?>
            <?php foreach ($products as $product): ?>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?php echo '/product/' . $product->slug; ?>"><img src="/uploads/<?php echo $product->product_img; ?>" alt="<?php echo $product->title; ?>" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title; ?></a></h4>
                    <p class="description"><?php echo substr($product->description, 0, 150) ?>...?></p>
                    <p class="price"> <span class="price-new">RS. <?php echo number_format($product->price);?></span></p>
                  </div>
                  </div>
              </div>
            </div>
          <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No record found!</div>
            <?php endif ?>
          </div>
          <!-- <div class="row">
            <div class="col-sm-6 text-left">
              <ul class="pagination">
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
               </ul>
            </div>
          </div> -->
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
<?php $this->load->view('layout/footer'); ?>
