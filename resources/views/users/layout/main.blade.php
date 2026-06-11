<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <meta name="home_url" content="{{@URL::to('/')}}">
  <title>@yield('title') | {{env('APP_NAME')}}</title>
    @include('users.layout.style')
    @yield('addStyle')
  <!-- Favicons -->
  <link href="{{URL::to('/public')}}/efavicon.png" rel="icon">
  <link href="{{URL::to('/public')}}/efavicon.png" rel="apple-touch-icon">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{URL::to('/public/favicon.png')}}" alt="AdminLTELogo" height="60">
  </div>

  <!-- Navbar -->
    @include('users.layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('users.layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
    @yield('content')
  <!-- /.content-wrapper -->
  
    @include('users.layout.footer')
</div>
<!-- ./wrapper -->


<div id="verifymodal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="verifyForm" action="{{route('user.verify_email')}}">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Verify Your Email</h5>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" name="email_otp" placeholder="Verification Code" required>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>



    @include('users.layout.script')
    @if(session()->has('success'))
      <script type="text/javascript">
        Toast.fire({
          icon: 'success',
          title: '{{ session()->get("success") }}'
        });
      </script>
    @endif
    @if(session()->has('error'))
      <script type="text/javascript">
        Toast.fire({
          icon: 'error',
          title: '{{ session()->get("error") }}'
        });
      </script>
    @endif
    @yield('addScript')
</body>
</html>
