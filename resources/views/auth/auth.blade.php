<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  
  @section('css')
        {{ Html::style('css/app.css')}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        {{ Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}
        {{ Html::style('LTE/css/AdminLTE.min.css')}}
        {{ Html::style('LTE/css/skins/_all-skins.min.css')}}
        {{ Html::style('plugins/iCheck/square/blue.css')}}
  @show

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
  
@yield('contents')


<!-- jQuery 2.2.3 -->
{{ Html::script('plugins/jQuery/jquery-2.2.3.min.js') }}
<!-- Bootstrap 3.3.6 -->
{{ Html::script('js/app.js') }}

{{ Html::script('plugins/iCheck/icheck.min.js') }}
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>