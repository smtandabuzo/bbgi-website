<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Contact Us Detail</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				    
                    <form enctype="multipart/form-data" method="post">
                  	<!--<div class="project_detail">    -->  
				<input type="hidden" value="<?php echo $_GET['id']; ?>" name="id" />
				
						
						<div class="col-md-6 col-sm-12 col-xs-12">
                        <p class="title">Email</p>
                        <p><input type="email" name="email" value="<?php echo $arr['email']?>" class="form-control"></p>
                        </div>
						
						<!--<div class="col-md-6 col-sm-12 col-xs-12">
                        <p class="title">Office Email</p>
                        <p><input type="email" name="office_email" value="<?php /*echo $arr['office_email']*/?>" class="form-control"></p>
                        </div>-->
						
						<div class="col-md-6 col-sm-12 col-xs-12">
                        <p class="title">Phone Number</p>
                        <p><input type="text"  name="telephone" value="<?php echo $arr['telephone']?>" class="form-control"></p>
                        </div>
						
						<!--<div class="col-md-6 col-sm-12 col-xs-12">
                        <p class="title">Whatsapp Number</p>
                        <p><input type="text" name="mobile" value="<?php /*echo $arr['mobile']*/?>" class="form-control"></p>
                        </div>-->
						
						
					<div class="col-md-6 col-sm-12 col-xs-12">
                        <p class="title">Address</p>
                        <p>
							<textarea class="form-control" name="address"><?php echo $arr['address']?></textarea>
						</p>
                        </div>
											
						                       
                        <!--</div>-->
						<div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="mtop20">
                           <input type="submit" name="submit" value="Update" class="btn btn-sm btn-primary">
                          
                          </div>
</div>
					  </form>

                    </div> 

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<script type="text/javascript" src="assets/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(function(){
        var editor = CKEDITOR.replace('description',
            {
                width: "100%",
                height: "200px"
            });
    });
</script>

<script type="text/javascript">
    //<![CDATA[

    CKEDITOR.replace( 'description',
        {
            filebrowserBrowseUrl : 'js/ckeditor/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : 'js/ckeditor/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl : 'js/ckeditor/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl : 'js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : 'js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : 'js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        }
    );

</script>
