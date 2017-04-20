
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">  

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Indoor maps') }}</title>
    @section('styles')
    <!-- Bootstrap -->
    <link href={{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }} rel="stylesheet">
    <!-- Font Awesome -->
    <link href={{ asset('vendors/font-awesome/css/font-awesome.min.css') }} rel="stylesheet">
    <!-- NProgress -->
    <link href={{ asset('vendors/nprogress/nprogress.css') }} rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href={{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }} rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href={{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }} rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href={{ asset('css/custom.min.css') }} rel="stylesheet">
    @show
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('layout.leftnav')

        <!-- top navigation -->
        @include('layout.topnav')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
              @yield('content');
            
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('layout.footer')
        <!-- /footer content -->
         
      </div>
    </div>
      
    <!-- messages content -->
    @include('messages.messages')
    <!-- /messages content -->
    
    @section('scripts')
    <!-- jQuery -->
    <script src={{ asset('vendors/jquery/dist/jquery.min.js') }}></script>
    <!-- Bootstrap -->
    <script src={{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}></script>
    <!-- FastClick -->
    <script src={{ asset('vendors/fastclick/lib/fastclick.js') }}></script>
    <!-- NProgress -->
    <script src={{ asset('vendors/nprogress/nprogress.js') }}></script>
    <!-- Chart.js -->
    <script src={{ asset('vendors/Chart.js/dist/Chart.min.js') }}></script>
    <!-- jQuery Sparklines -->
    <script src={{ asset('vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}></script>
    <!-- morris.js -->
    <script src={{ asset('vendors/raphael/raphael.min.js') }}></script>
    <script src={{ asset('vendors/morris.js/morris.min.js') }}></script>
    <!-- gauge.js -->
    <script src={{ asset('vendors/gauge.js/dist/gauge.min.js') }}></script>
    <!-- bootstrap-progressbar -->
    <script src={{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}></script>
    <!-- Skycons -->
    <script src={{ asset('vendors/skycons/skycons.js') }}></script>
    <!-- Flot -->
    <script src={{ asset('vendors/Flot/jquery.flot.js') }}></script>
    <script src={{ asset('vendors/Flot/jquery.flot.pie.js') }}></script>
    <script src={{ asset('vendors/Flot/jquery.flot.time.js') }}></script>
    <script src={{ asset('vendors/Flot/jquery.flot.stack.js') }}></script>
    <script src={{ asset('vendors/Flot/jquery.flot.resize.js') }}></script>
    <!-- Flot plugins -->
    <script src={{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}></script>
    <script src={{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}></script>
    <script src={{ asset('vendors/flot.curvedlines/curvedLines.js') }}></script>
    <!-- DateJS -->
    <script src={{ asset('vendors/DateJS/build/date.js') }}></script>
    <!-- bootstrap-daterangepicker -->
    <script src={{ asset('vendors/moment/min/moment.min.js') }}></script>
    <script src={{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}></script>    
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <!-- Custom Theme Scripts -->
    <script src={{ asset('js/custom.min.js') }}></script>
    @show
  </body>
</html>