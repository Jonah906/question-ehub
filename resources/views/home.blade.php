@extends('backend.layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="wrapper">

  @include("backend.partials.header")
  
  <!-- =============================================== -->
  
  <!-- Left side column. contains the sidebar -->
  @include("backend.partials.sidebar")
  
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Dashboard
        {{-- <small>it all starts here</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> E-HUB</a></li>
        <li><a href="{{route("home")}}">Dashboard</a></li>
        <li class="active"> Home</li>
      </ol>
    </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Number of Users in the system</span>
            <span class="info-box-number">{{ App\Models\User::count() }}<small></small></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-home"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Number of Departments in the System</span>
            <span class="info-box-number">{{ App\Models\BackDepartment::count() }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Number of Questions in the System</span>
            <span class="info-box-number">{{ App\Models\Question::count() }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->
          {{-- <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Visitors Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-9 col-sm-8">
                  <div class="pad">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-4">
                  <div class="pad box-pane-right bg-green" style="min-height: 280px">
                    <div class="description-block margin-bottom">
                      <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                      <h5 class="description-header">8390</h5>
                      <span class="description-text">Visits</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block margin-bottom">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">30%</h5>
                      <span class="description-text">Referrals</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">70%</h5>
                      <span class="description-text">Organic</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div> --}}
       

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Users</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Users</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$user->name}}</td>
                        <td>
                          <span class="label label-success">Online</span>
                          <span class="label label-danger">offline</span>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
          </div>
          <!-- /.box -->

             <!-- /.box -->
             <div class="row">
              <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Latest Departments</h3>
  
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>Departments</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($departments as $department)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{$department->name}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                  {{-- <div class="box-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All Users</a>
                  </div> --}}
                 
                </div>
                <!--/.box -->
              </div>
              
              <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col -->
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="description-block border-right">
              <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
              <h5 class="description-header">$35,210.43</h5>
              <span class="description-text">TOTAL REVENUE</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-3 col-xs-6">
            <div class="description-block border-right">
              <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
              <h5 class="description-header">$10,390.90</h5>
              <span class="description-text">TOTAL COST</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-3 col-xs-6">
            <div class="description-block border-right">
              <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
              <h5 class="description-header">$24,813.53</h5>
              <span class="description-text">TOTAL PROFIT</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-3 col-xs-6">
            <div class="description-block">
              <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
              <h5 class="description-header">1200</h5>
              <span class="description-text">GOAL COMPLETIONS</span>
            </div>
            <!-- /.description-block -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-footer --> 
      <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
  
@include("backend.partials.footer")

</div>
<!-- ./wrapper -->

@endsection
