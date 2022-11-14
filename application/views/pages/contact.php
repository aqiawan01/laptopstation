<?php $this->load->view('layout/header'); ?>
  <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
       <ul class="breadcrumb">
        <li><a href="index"><i class="fa fa-home"></i></a></li>
        <li><a href="contact">Contact US</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title"><?php echo $title; ?></h1>
          <h3 class="subtitle">Our Location</h3>
          <div class="row">
            <div class="col-sm-3"><img src="/assets/image/product/store_location-275x180.jpg" alt="MarketShop Template" title="MarketShop Template" class="img-thumbnail" /></div>
            <div class="col-sm-3"><strong>MarketShop Template</strong><br />
              <address>
              off#1005,<br />
              noor trade center,<br />
              gulshan e iqbal,<br />
              karachi
              </address>
            </div>
            <div class="col-sm-3"><strong>Telephone</strong><br>
              +92 3042586174<br />
               </div>
            <div class="col-sm-3"> <strong>Opening Times</strong><br />
              2pm to 11pm<br />
              <br />
              <strong>Comments</strong><br />
              This field is for any special notes you would like to tell the customer i.e. Store does not accept cheques. </div>
          </div>
          <form class="form-horizontal">
            <fieldset>
              <h3 class="subtitle">Send us an Email</h3>
              <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-name">Your Name</label>
                <div class="col-md-10 col-sm-9">
                  <input type="text" name="name" value="" id="input-name" class="form-control" />
                </div>
              </div>
              <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-email">E-Mail Address</label>
                <div class="col-md-10 col-sm-9">
                  <input type="text" name="email" value="" id="input-email" class="form-control" />
                </div>
              </div>
              <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-enquiry">Enquiry</label>
                <div class="col-md-10 col-sm-9">
                  <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                </div>
              </div>
            </fieldset>
            <div class="buttons">
              <div class="pull-right">
                <input class="btn btn-primary" type="submit" value="Submit" />
              </div>
            </div>
          </form>
        </div>
        <aside id="column-right" class="col-sm-3 hidden-xs">
          <div class="list-group">
            <h2 class="subtitle">Custom Content</h2>
            <p>This is a CMS block edited from admin. You can insert any content (HTML, Text, Images) Here. </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          </div>
          <div class="banner owl-carousel">
            <div class="item"> <a href="#"><img src="/assets/image/banner/small-banner1-265x350.jpg" alt="small banner" class="img-responsive" /></a> </div>
            <div class="item"> <a href="#"><img src="/assets/image/banner/small-banner-265x350.jpg" alt="small banner1" class="img-responsive" /></a> </div>
          </div>
        </aside>
        <!--Middle Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
<?php $this->load->view('layout/footer'); ?>