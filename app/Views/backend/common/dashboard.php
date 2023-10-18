<div class="content-wrapper">
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
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?= $user ?></h3>
            <p>Number of Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?= $book ?></h3>
            <p> Booked</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?= $room ?></h3>
            <p> Room Catagory List</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>


      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>26<sup style="font-size: 20px">%</sup></h3>
            <p>Mothly Profit Rate</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= $employs ?></h3>
            <p>Employs</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <!-- solid sales graph -->
    <div class="box box-solid bg-teal-gradient">
      <div class="box-header">
        <i class="fa fa-th"></i>
        <h3 class="box-title">Sales Graph</h3>
        <div class="box-tools pull-right">
          <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body border-radius-none">
        <div class="chart" id="line-chart" style="height: 250px;"></div>
      </div><!-- /.box-body -->
      <div class="box-footer no-border">
        <div class="row">
          <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
            <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC" />
            <div class="knob-label">Mail-Orders</div>
          </div><!-- ./col -->
          <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
            <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC" />
            <div class="knob-label">Online</div>
          </div><!-- ./col -->
          <div class="col-xs-4 text-center">
            <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC" />
            <div class="knob-label">In-Store</div>
          </div><!-- ./col -->
        </div><!-- /.row -->
      </div><!-- /.box-footer -->
    </div><!-- /.box -->

  </section>