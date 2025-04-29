@extends('admin.layout.main')
@section('title', 'Dashboard')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content admin">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <br><br><br><br><br>
            <div class="row">
              <div class="col-lg-6">
                <div class="small-box bg-white text-center" bis_skin_checked="1">
                  <div class="inner" bis_skin_checked="1">
                    <p>Main Services</p>

                    <h3 id="w-online-stores">{{number_format($main_services)}}</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="small-box bg-white text-center" bis_skin_checked="1">
                  <div class="inner" bis_skin_checked="1">
                    <p>Sub Services</p>

                    <h3 id="w-online-stores">{{number_format($sub_services)}}</h3>
                  </div>
                </div>
              </div>  
            </div>
            <div class="row">

              <div class="col-lg-6">
                <div class="small-box bg-white text-center" bis_skin_checked="1">
                  <div class="inner" bis_skin_checked="1">
                    <p>Total Blogs</p>

                    <h3 id="w-online-stores">{{number_format($blogs)}}</h3>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="small-box bg-white text-center" bis_skin_checked="1">
                  <div class="inner" bis_skin_checked="1">
                    <p>Newsletter Subscribers</p>

                    <h3 id="w-online-stores">{{number_format($newsletter)}}</h3>
                  </div>
                </div>
              </div> 

              <div class="col-lg-6">
                <div class="small-box bg-dash text-center" bis_skin_checked="1">
                  <div class="inner" bis_skin_checked="1">
                    <p>Total Enquiries</p>

                    <h3 id="w-online-stores">{{number_format($enquiries)}}</h3>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="small-box bg-dash text-center" bis_skin_checked="1">
                  <div class="inner" bis_skin_checked="1">
                    <p>CallBack Requests</p>

                    <h3 id="w-online-stores">{{number_format($call_back)}}</h3>
                  </div>
                </div>
              </div>   
            </div>
          </div>



        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
@section('addScript')
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::to('/public')}}/dist/js/pages/dashboard.js"></script>
  <script type="text/javascript">

  

  </script>
@endsection