  <div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2><?php echo $title; ?></h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="col-md-14">
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" id="activeAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                            <a href="#" id="deactiveAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                            <a href="#" id="deleteAll" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                            <a href="/admin/media/add" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                        </div>
                        <?php echo form_open('', ['name'=>'formSearch', 'id'=>'formSearch', 'method'=>'get']);?>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="per_page" onchange="javascript:document.forms['formSearch'].submit()" class="form-control">
                                            <option value="15" <?php echo ($this->input->get('per_page') == '15') ? 'selected' : NULL; ?>>15</option>
                                            <option value="25" <?php echo ($this->input->get('per_page') == '25') ? 'selected' : NULL; ?>>25</option>
                                            <option value="50" <?php echo ($this->input->get('per_page') == '50') ? 'selected' : NULL; ?>>50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text" name="q" class="form-control" placeholder="Search" value="">
                                        <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <br>
                    <?php if ($medias) : ?>
                      <?php echo form_open('', ['name'=> 'formView', 'id'=> 'formView']); ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox10" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox10"></label>
                                    </div>
                                </th>
                                <th style="width:30%">Title</th>
                                <th style="width:17%">Media Type</th>
                                <th style="width:17%">Media Image</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($medias as $media) : ?>
                            <tr align="center">
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="checkbox<?php echo $media->id; ?>" type="checkbox"
                                        name="checkAll[]" class="checkParam" value="<?php echo $media->id; ?>">
                                        <label for="checkbox<?php echo $media->id; ?>"></label>
                                    </div>
                                </td>
                                <td align="left"><?php echo $media->title; ?></td>
                                <td><?php echo $media->media_type; ?></td>
                                <td><img src="/uploads/<?php echo $media->media_img; ?>" width="100" height="100" alt="<?php
                                echo $media->title; ?>" class="img-thumbnail"></td>
                                <td>
                                    <?php if ($media->status ==  'DEACTIVE') :  ?>
                                    <a class="singleStatus" href="/admin/media/status/<?php echo $media->id; ?>"><span class="label label-important">Deactive!</span>
                                    <?php else: ?>
                                    <a class="singleStatus" href="/admin/media/status/<?php echo $media->id; ?>"><span class="label label-info">Active!</span>
                                <?php endif ?>
                                </td>
                                <td>
                                    <a href="/admin/media/edit/<?php echo $media->id; ?>" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <a href="/admin/media/delete/<?php echo $media->id; ?>" class="label label-important singleDelete"> <i class="fa fa-trash-o"></i></a>    
                                </td>
                            </tr>
                        <?php endforeach  ?>
                        </tbody>
                    </table>
                    <?php echo form_close(); ?>
                    <div>
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                    <?php else : ?>
                    <div class="alert alert-info">
                        <strong>Info!</strong> No Record Found!
                    </div>
                <?php endif ?>
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>
<script>
    $(document).ready(function() {

        //SINGLE STATUS
       $('.singleStatus').on('click', function(event) {
          event.preventDefault();
          var self = $(this);
          var href = self.attr('href');

          self.html('<img src="/assets/img/loading.gif" width="24" height="24">');

          $.get(href, function(response) {
              if (response == 'ACTIVE')
                self.html('<span class="label label-info">Active</span>');

            else
                self.html('<span class="label label-important">Deactive</span>');
          });  
       });

       //SINGLESTATUS

       $(".singleDelete").on('click', function(event) {
           event.preventDefault();

           if (confirm('Are you sure you want to delete this')) 
           {
              var self = $(this);
              var href = self.attr('href');
              self.html = ('<img src="/assets/img/loading.gif" width="24" height="24">');

              $.get(href, function(response) {
                  if (response) 
                  {
                    self.closest('tr').css("background-color", "lightblue").fadeOut(2000);
                    self.remove();
                  }
              });
           }
           else
            return false;
       });



       //ACTIVE ALL STATUS
       $("#activeAllStatus").on('click', function(event) {
            event.preventDefault();
            if ($(".checkParam:checked").length > 0) 
            {
               var formSerials = $("#formView").serialize();
               $.post('/admin/media/active_all_status', formSerials, function(response) {
                    if (response >  0) 
                    {
                      window.location.href = '/admin/media';
                    }
               })

            }
            else
              {
                alert("please select the checkbox!");
              }
       });

       //DEACTIVE ALL STATUS
        $("#deactiveAllStatus").on('click', function(event) {
            event.preventDefault();
            if ($(".checkParam:checked").length > 0) 
            {
                var formSerials = $("#formView").serialize();
                $.post('/admin/media/deactive_all_status', formSerials, function(response) {
                    if (response > 0 ){ 
                        window.location.href = '/admin/media';
                    }
                });
            }
            else{
                alert("please select the checkbox!");
            }
        });

       //DELETE ALL 
       $("#deleteAll").on('click', function(event) {
            event.preventDefault();
           
         if ($(".checkParam:checked").length > 0) 
            {
                 if (confirm('Are you sure you want to delete all')) 
            {
                var formSerials = $("#formView").serialize();
                $.post('/admin/media/delete_all', formSerials, function(response) {
                    if (response > 0 ) 
                        window.location.href = '/admin/media';
                });
            }
         }

            else 
                alert("please select the checkbox!");
            
        });
    });
</script>