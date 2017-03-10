<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | @yield('name')</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @section('css')
        {{ Html::style('css/app.css')}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        {{ Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}

        @yield('extra-style')

        {{ Html::style('LTE/css/AdminLTE.min.css')}}
        {{ Html::style('LTE/css/skins/_all-skins.min.css')}}
  @show
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('partials.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @yield('contents')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

</div>

  @section('script')
       {{ Html::script('plugins/jQuery/jquery-2.2.3.min.js') }}
       {{ Html::script('js/app.js') }}
       {{ Html::script('plugins/fastclick/fastclick.js') }}
       {{ Html::script('LTE/js/app.min.js') }}
       {{ Html::script('plugins/sparkline/jquery.sparkline.min.js') }}
       {{ Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
       {{ Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}
       {{ Html::script('plugins/slimScroll/jquery.slimscroll.min.js') }}

       <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
       {{ Html::script('plugins/chartjs/Chart.min.js') }}
       {{ Html::script('LTE/js/pages/dashboard2.js') }}
       {{ Html::script('LTE/js/demo.js') }}
  @show  
  @yield('extra-script')

</body>
</html>
