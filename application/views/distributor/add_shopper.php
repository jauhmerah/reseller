<link href="<?= base_url(); ?>asset/distributor/dist/css/bootstrap-imageupload.css" rel="stylesheet">

<script src="<?= base_url(); ?>asset/distributor/dist/js/bootstrap-imageupload.js"></script>

<!-- <link href="<?= base_url(); ?>asset/plugin/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet">   

<script src="<?= base_url(); ?>asset/plugin/bootstrap-fileinput/bootstrap-fileinput.js"></script> -->


<script src="<?= base_url(); ?>asset/distributor/js/strength.js"></script>



<style>
            body {
                padding-top: 70px;
            }

            .imageupload {
                margin: 20px 0;
            }
            /* .has-error .form-control{
              color: #a94442;
            } */

            .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
        .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}
</style>


<section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h3 display">Shopper Profile</h1>
          </header>
          <div class="card">
              <div class="card-body">    
                   
                        <?php echo form_open_multipart('distributor/page/s12');?>
                            
                                <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                      <h2 class="h5 display display">Profile Picture</h2>
                                    </div>
                                    <div class="card-body">

                                        <div class="imageupload panel panel-default">
                                      <div class="panel-heading clearfix">
                                          <h3 class="panel-title pull-left">Upload Image</h3>
                                          <div class="btn-group pull-right">
                                              <button type="button" class="btn btn-info active">File</button>
                                              <button type="button" class="btn btn-primary">URL</button>
                                          </div>
                                      </div>
                                      <div class="clearfix" style="height:20px"></div>
                                      <center>
                                          <div class="file-tab panel-body">

                                          <div class="clearfix" style="height:20px"></div>
                                          
                                          
                                              <div class="btn btn-info btn-file">
                                                  <span style="color:white">Browse</span>
                                                  <input type="file" name="fileImg">
                                              </div>
                                              <button type="button" class="btn btn-warning">Remove</button>
                                          </div>
                                      </center>
                                      <div class="clearfix" style="height:20px"></div>
                                      <center>
                                      <div class="url-tab panel-body">
                                          <div class="input-group">
                                              <input type="text" class="form-control hasclear" placeholder="Image URL">
                                              <div class="input-group-btn">
                                                  <button type="button" class="btn btn-info">Submit</button>
                                              </div>
                                          </div>
                                          
                                              <button type="button" class="btn btn-warning">Remove</button>
                                          
                                          <div class="clearfix" style="height:20px"></div>
                                          <input type="hidden" name="image-url">
                                      
                                          
                                      </div>
                                      </center>
                                  </div>
                          
                                </div>
                              </div>
                            </div>

                               <div class="col-lg-12">
                                  <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                      <h2 class="h5 display">User Information</h2>
                                    </div>
                                    <div class="card-body">
                                                        
                                      
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">First Name</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control" name="fname" id="fname" required>
                                          </div>
                                          <label class="col-sm-2 form-control-label">Last Name</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control" name="lname" id="lname" required>
                                          </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="form-group row" id="user1">
                                          <label class="col-sm-2 form-control-label">Username</label>
                                          <div class="col-sm-4" >
                                            <input type="text" class="form-control" name="username" id="username" required>
                                          
                                          <div  id="divUser" name="divUser">
                                                
                                              </div>
                                          
                                          </div>
                                          
                                        </div>
                                        <div class="line"></div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Identification Number</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control" name="icno" id="icno" required>
                                          </div>
                                          <label class="col-sm-2 form-control-label">Email</label>
                                          <div class="col-sm-4">
                                            <input type="email" class="form-control" name="email" id="email" required placeholder="e.g : example@email.com">
                                          </div>
                                        </div>
                                       
                                    </div>
                                  </div>
                                </div> 

                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <h2 class="h5 display display">Company Information</h2>
                                        </div>

                                        <div class="card-body">
                                           <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Company Name</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control" name="company" id="company" required>
                                          </div>
                                          
                                        </div>
                                      
                                        <div class="line"></div>

                                     
                                           <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Phone</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control" name="phone" id="phone" required placeholder="e.g : +601234567890">
                                          </div>
                                          
                                        </div>
                                      
                                        <div class="line"></div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Address</label>
                                          <div class="col-sm-4">
                                            <textarea class="form-control" name="address" id="address" required></textarea>
                                          </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Postcode</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control" name="postcode" id="postcode" required>
                                          </div>
                                          <label class="col-sm-2 form-control-label">Town/City</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control" name="city" id="city" required>
                                          </div>
                                        </div>
                                        
                                        <div class="line"></div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">State</label>
                                          <div class="col-sm-4">
                                            <select class="form-control" name="country" id="country" required>
                                            <option>--Select State--</option>
                                            
                                            <option value="1">Kuala Lumpur</option>
                                            <option value="2">Labuan</option>
                                            <option value="3">Putrajaya</option>
                                            <option value="4">Johor</option>
                                            <option value="5">Kedah</option>
                                            <option value="6">Kelantan</option>
                                            <option value="7">Melaka</option>
                                            <option value="8">Negeri Sembilan</option>
                                            <option value="9">Pahang</option>
                                            <option value="10">Perak</option>
                                            <option value="11">Perlis</option>
                                            <option value="12">Pulau Pinang</option>
                                            <option value="13">Sabah</option>
                                            <option value="14">Sarawak</option>
                                            <option value="15">Selangor</option>
                                            <option value="16">Terengganu</option>
                                            </select>
                                          </div>
                                          
                                        </div>

                                        <div class="line"></div>
                                          <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Note</label>
                                            <div class="col-sm-6">
                                              <textarea class="form-control" name="note" id="note"></textarea>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-lg-12">
                                    <div class="card">
                                      <div class="card-header d-flex align-items-center">
                                        <h2 class="h5 display display">Password Setting</h2>
                                      </div>
                                      <div class="card-body">
                                           
                                          <div class="form-group row" id="p1">
                                            <label class="col-sm-2 form-control-label">New Password</label>
                                            <div class="col-sm-4">
                                              <input type="password" class="form-control" name="password" id="pass1" required>
                                              <div class="clearfix" style="height:5px">
                                                
                                              </div>
                                              <div class="pwstrength_viewport_progress"></div>
                                            </div>
                                          </div>
                                        <div class="line"></div>
                                          
                                          <div class="form-group row" id="p2">
                                            <label class="col-sm-2 form-control-label">Re-enter Password</label>
                                            <div class="col-sm-4">
                                              <input type="password" class="form-control" id="pass2" required>
                                              <!-- <div class="clearfix" style="height:10px">
                                                
                                              </div> -->
                                              <div class="invalid-feedback" id="divError" name="divError">
                                               
                                              </div>
                                            </div>
                                           
                                          </div>


                                       <div class="line"></div>
                                          <div class="form-group row">
                                            <div class="col-sm-4 offset-sm-2">
                                              <button type="submit" class="btn btn-secondary">Cancel</button>
                                              <button type="submit" class="btn btn-primary" id="btnSubmit">Save changes</button>
                                            </div>
                                          </div>
                                       
                                      </div>
                                    </div>
                                  </div> 
                      
                        </form>
                    
              </div>
          </div>
           
          

          <div class="row">
           
         


          </div>
        </div>
      </section>

<script>
$(document).ready(function() {

        var $imageupload = $('.imageupload');
            $imageupload.imageupload();
        $('#username').keyup(function () {
                      if ( ($(this).val() != "") && ($(this).val() != null) && ($(this).length != null)) 
                      { 
                               username2 = $(this).val();
                              if ( username2.length >= 5 ) {

                                       

                                        $.ajax({
                                        type: 'post',
                                        url: '<?= site_url('distributor/checkUsername'); ?>',
                                        dataType: 'json',
                                        cache: false,
                                        data: {username:username2},
                                        success : function(result) 
                                        {
                                                $("#user1").prop('class', 'form-group row has-danger');

                                                $("#username").prop('class', 'form-control is-invalid');

                                                $("#divUser").prop('class', 'invalid-feedback');                            
                                      
                                                $("#divUser").html('The username are already been used');

                                                $('#btnSubmit').attr('disabled','disabled');

                                                
                                        },
                                        error: function (result) 
                                        {
                                                $("#user1").prop('class', 'form-group row has-success');

                                                $("#username").prop('class', 'form-control is-valid');

                                                $("#divUser").prop('class', 'valid-feedback');                                                       

                                                $("#divUser").html('The username are available');

                                                $("#btnSubmit").removeAttr('disabled');  
                                        }
                                      });
                              }
                              else
                              {
                                              $("#user1").prop('class', 'form-group row has-danger');

                                                $("#username").prop('class', 'form-control is-invalid');

                                                $("#divUser").prop('class', 'invalid-feedback');                            
                                      
                                                $("#divUser").html('The username must be more than 5 character');

                                                $('#btnSubmit').attr('disabled','disabled');
                              }
                              
                              
                            
                            
                      }
                      else
                      {
                                $("#user1").prop('class', 'form-group row');

                                $("#username").prop('class', 'form-control');

                                $("#btnSubmit").removeAttr('disabled');
                                
                                $("#divUser").html('');
                      }
        
        });

        $('#pass1').keyup(function() {
					if ($(this).val() == "") {
						$("#p1").prop('class', 'form-group row');
						$("#pass2").val("");
						$("#p2").prop('class', 'form-group row');
						$("#btnSubmit").removeAttr('disabled');
					}else{
						$("#p1").prop('class', 'form-group row has-danger');
            
            $("#pass1").prop('class', 'form-control is-invalid');
            $("#p2").prop('class', 'form-group row has-danger');
            
						$("#pass2").prop('class', 'form-control is-invalid');
						$("#btnSubmit").prop('disabled', 'disabled');
					}
				});
				$('#pass2').keyup(function() {
					if ($(this).val() == "" || $(this).val() != $('#pass1').val()) {
						$("#p1").prop('class', 'form-group row has-danger');
						$("#pass1").prop('class', 'form-control is-invalid');
            

						$("#p2").prop('class', 'form-group row has-danger');
						$("#pass2").prop('class', 'form-control is-invalid');
            
            $('#btnSubmit').attr('disabled','disabled');

						// $("#divError").prop('class', 'invalid-feedback');
            
            $("#divError").html('The passwords does not match');

            
					}else{
						$("#p1").prop('class', 'form-group row has-success');
						$("#pass1").prop('class', 'form-control is-valid');
            
						$("#p2").prop('class', 'form-group row has-success');
						$("#pass2").prop('class', 'form-control is-valid');
            
            $("#btnSubmit").removeAttr('disabled');
            $("#divError").html('');
            
						
					}
				});
});

</script>