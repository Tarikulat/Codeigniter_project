<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>public/setup/dist/img/admin.jpg" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Md Tarikul Islam</p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..." />
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      
      <li class="treeview">
              <a href="#">
                <i class="fa fa-home"></i>
                <span>Home</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>

            <li class="treeview">
              <a href="book-list">
                <i class="fa fa-book"></i>
                <span>Booked</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-check"></i>
                <span>Check-in</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-check"></i>
                <span>Check-out</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-list"></i>
                <span>Room Catagory List</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-bed"></i>
                <span>Rooms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>

      <li class="treeview">
        <a href="<?php echo base_url(); ?>public/users-list">
          <i class="fa fa-users"></i> <span>Users </span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>
   
     
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Details</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Rooms</a></li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> Services <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Resturent</a></li>
              <li>
                <a href="#"><i class="fa fa-circle-o"></i> Poolside bar <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Interconnecting rooms</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i>Tour & excursions</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Public computer</a></li>
        </ul>
      </li>
      <li><a href="documentation/..."><i class="fa fa-book"></i> Reporting</a></li>
      <li class="header">End section</li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel for hotel management system</small>
    </h1>
    <h4 class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
    <a href="signin" class="nav-item nav-link"> <button type="submit">Logout</button> </a>
    
</h4>
    
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>70</h3>
            <p>New Rooms Booking Order</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>45<sup style="font-size: 20px">%</sup></h3>
            <p>Mothly Profit Rate</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>10</h3>
            <p> daily New User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>
            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
     
      
      
      <!-- ./col -->
    </div><!-- /.row -->
    <!-- Main row -->
</section>