<div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Shopper List</li>
          </ul>
        </div>
</div>
<section class="forms">
        <div class="container-fluid">
       
          <header> 
                <h1 class="h3 display">Shopper List</h1>
          </header>
                    <div class="card">
                        <div class="card-body">   

                                <div class="table-responsive">
                                        <div class="col-md-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Shopper Username</th>
                                                        <th>Company Name</th>
                                                        <th>email</th>
                                                        <th>Phone No.</th>
                                                        <th>Status</th>                                                        
                                                        <th>Action</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $n=0;
                                                     if(!empty($result)){
                                                    foreach ($result as $key) { 
                                                        $n++;
                                                        ?>
                                                        <tr>
                                                        <td><?= $n; ?></td>
													    <td><?= $key->sh_username; ?></td>
													    <td><?= $key->sa_company; ?></td>
													    <td><?= $key->sh_email; ?></td>
													    <td><?= $key->sa_tel; ?></td>
													    <td align="center">
                                                        <?php 
                                                        if ($key->sh_verify == 0) 
                                                        { ?>
                                                        <img src="<?= base_url(); ?>asset/distributor/img/verify/notverify.png" alt="">
                                                        <?php    
                                                        }elseif ($key->sh_verify == 1) 
                                                        {
                                                            # code...
                                                        }
                                                        ?></td>
													    <td></td>
                                                        </tr>
                                                    <?php } 
                                                    }else{?>
                                                        <tr>
                                                        <td colspan="7" align="center">No Data</td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                        <?php
												            $lastRow = $numPage + sizeof($result);
													    ?>
                                                        <tr>
												<td colspan="7">
													<ul class="pagination">
													<li>
													<div class="pull-right">
														<?= $link; ?>
													</div>
														
													</li>
														
													</ul>
													<div class="pull-right">
														<span class="btn disabled">Showing <?= ($numPage+1); ?> to <?= $lastRow; ?> of <?= $total; ?> records</span>
													</div> 
												</td>
											</tr>
                                                </tfoot>    
                                            </table>
                                        </div>
                                    
                                </div> 
                            
                        </div>
                    </div>
          </div>
        
</section>
