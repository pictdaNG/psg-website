<!DOCTYPE html>
<html>
  <head>
    <title>PSG | Admin</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="shortcut icon" href="{{ URL::asset('./assets/favicon.ico') }}" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('./assets/admin/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/css/main.css?version=4.4.0') }}" rel="stylesheet">
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w" style="padding-top: 30px; margin-top: 70px;">
        
        <h4 class="auth-header">
          Plateau State Government
        </h4>
        <form action="{{ route('do_login') }}" method="post">
          
          @if(session('error'))
            <div class="alert alert-danger" alert-dismissable role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Oh snap! </strong> {{ session('error') }}.
            </div>
          @endif

          @if(session('success'))
            <div class="alert alert-success alert-dismissable"> 
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Well done! </strong> {{ session('success') }}
            </div>
          @endif
          {{ csrf_field() }}
          <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" placeholder="Enter your username" type="text" name="email" required>
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" placeholder="Enter your password" type="password" name="password" required>
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="buttons-w">
            <button class="btn btn-primary" type="submit">Log me in</button>
            <!-- <div class="form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Remember Me
              </label>
            </div> -->
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
