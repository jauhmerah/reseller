<!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="<?= base_url(); ?>asset/distributor/img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">Anderson Hardy</h2><span class="text-uppercase">Web Developer</span>
          </div>
          <div class="sidenav-header-logo"><a href="<?= site_url('distributor/Dashboard/page/a1'); ?>" class="brand-small text-center"> <strong>N</strong><strong class="text-primary">R</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu1" class="side-menu list-unstyled">

            <li <?php if ($link == 'a1') { echo "class='active'";}?> ><a href="<?= site_url('distributor/Dashboard/page/a1'); ?>"> <i class="icon-presentation"></i><span>Dashboard</span></a></li>
            <li <?php if ($link == 'b1') { echo "class='active'";}?> ><a href="<?= site_url('distributor/Dashboard/page/a1'); ?>"> <i class="fa fa-shopping-bag"></i><span>Shopper Sales</span></a></li>
      

            <li ><a href="#pages-nav-list2" data-toggle="collapse" aria-expanded="false"> <i class="fa fa-users"></i><span>Shopper</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
                <ul id="pages-nav-list2" class="collapse list-unstyled">
                <li <?php if ($link == 's2') { echo "class='active'";}?> > <a href="<?= site_url('distributor/Dashboard/page/s2'); ?>"><i class="fa fa-user-plus"></i><span>Add Shopper</span></a></li>
                <li <?php if ($link == 'm1') { echo "class='active'";}?> > <a href="<?= site_url('distributor/Dashboard/page/m1'); ?>"><i class="fa fa-list"></i><span>Shopper List</span></a></li>
                
                </ul>

            </li>
            <li <?php if ($link == 'p1') { echo "class='active'";}?> ><a href="<?= site_url('distributor/Dashboard/page/p1'); ?>"> <i class="fa fa-address-book"></i><span>User Profile</span></a></li>
            
            <li <?php if ($link == 'b1') { echo "class='active'";}?> ><a href="<?= site_url('distributor/Dashboard/page/a1'); ?>"> <i class="fa fa-money"></i><span>Commission List</span></a></li>
            
               
           
              </ul>
            </li>
           
          </ul>
        </div>

      </div>
    </nav>