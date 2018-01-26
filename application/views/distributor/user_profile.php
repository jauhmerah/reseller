<link href="<?= base_url(); ?>asset/dist/css/bootstrap-imageupload.css" rel="stylesheet">
<script src="<?= base_url(); ?>asset/dist/js/bootstrap-imageupload.js"></script>

<style>
            body {
                padding-top: 70px;
            }

            .imageupload {
                margin: 20px 0;
            }
            .pers{
              color:#FF0000;
            }
            .comp{
              color:#FF0000;
            }
            .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #ffffff !important; background: transparent; }
        .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}
</style>


<section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h3 display">User Profile</h1>
          </header>
          <div class="card">
              <div class="card-body">    
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="btn btn-info personal active">
                                <a href="#personal" aria-controls="personal" role="tab" data-toggle="tab" class="pers">Personal</a>
                            </li>
                            <li role="presentation" class="btn btn-info company">
                                <a href="#company" aria-controls="company" role="tab" data-toggle="tab" class="comp">Company</a>
                            </li>
                        </ul>
                    
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="personal">
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
                                                  <input type="file" name="image-file">
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
                                      <h2 class="h5 display">Information</h2>
                                    </div>
                                    <div class="card-body">
                                                        
                                      <form class="form-horizontal">
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">First Name</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control">
                                          </div>
                                          <label class="col-sm-2 form-control-label">Last Name</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Username</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control"><span class="help-block-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                          </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Identification Number</label>
                                          <div class="col-sm-4">
                                            <input type="text" name="text" class="form-control">
                                          </div>
                                          <label class="col-sm-2 form-control-label">Email</label>
                                          <div class="col-sm-4">
                                            <input type="email" class="form-control">
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
                                           
                                          <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">New Password</label>
                                            <div class="col-sm-4">
                                              <input type="password" class="form-control">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Re-enter Password</label>
                                            <div class="col-sm-4">
                                              <input type="password" class="form-control">
                                            </div>
                                          </div>


                                       <div class="line"></div>
                                          <div class="form-group row">
                                            <div class="col-sm-4 offset-sm-2">
                                              <button type="submit" class="btn btn-secondary">Cancel</button>
                                              <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                          </div>
                                       
                                      </div>
                                    </div>
                                  </div> 
                            </div>
                            <div role="tabpanel" class="tab-pane" id="company">
                              <div class="col-lg-12">
                                  <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                      <h2 class="h5 display">Information</h2>
                                    </div>
                                    <div class="card-body">
                                                        
                                      <form class="form-horizontal">
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Company Name</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control">
                                          </div>
                                          
                                        </div>
                                        <div class="line"></div>
                                        
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Phone Number</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control">
                                          </div>
                                          
                                        </div>
                                        <div class="line"></div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Address</label>
                                          <div class="col-sm-4">
                                            <textarea class="form-control"></textarea>
                                          </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">Postcode</label>
                                          <div class="col-sm-4">
                                            <input type="text" name="text" class="form-control">
                                          </div>
                                          <label class="col-sm-2 form-control-label">Town/City</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                        
                                        <div class="line"></div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 form-control-label">State</label>
                                          <div class="col-sm-4">
                                            <select class="form-control">
                                            <option>--Select State--</option>
                                            
                                            <option>Negeri Sembilan</option>
                                            </select>
                                          </div>
                                          
                                        </div>
                                         <div class="line"></div>
                                          <div class="form-group row">
                                            <div class="col-sm-4 offset-sm-2">
                                              <button type="submit" class="btn btn-secondary">Cancel</button>
                                              <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                          </div>
                                    </div>
                                  </div>
                                </div> 
                            </div>
                        </div>
                    </div>
              </div>
          </div>
           
          

          <div class="row">
           
         


          </div>
        </div>
      </section>

<script>
$(document).ready(function(){
    $(".pers").click(function(){
        $(".personal").addClass("active");
        $(".company").removeClass("active");
    });

    $(".comp").click(function(){
        $(".company").addClass("active");
        $(".personal").removeClass("active");
    });
});
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

            $('#imageupload-disable').on('click', function() {
                $imageupload.imageupload('disable');
                $(this).blur();
            })

            $('#imageupload-enable').on('click', function() {
                $imageupload.imageupload('enable');
                $(this).blur();
            })

            $('#imageupload-reset').on('click', function() {
                $imageupload.imageupload('reset');
                $(this).blur();
            });
</script>