
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SCM | Pertamina LPG Sistem Management</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="/assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="/assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="/assets/AdminLTE-2.0.5/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
        <link rel="icon" type="image/x-icon" href="/assets/AdminLTE-2.0.5/dist/img/Elpiji.png">
        <style media="screen">
        .locksscreen {
          background: url('/assets/background.jpg') no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          }
          .form-pertamina{
            border:1px solid red;
          }

          .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid red;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
          }

          @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
          }

          @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
          }
        </style>
    </head>
  <body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <img src="/assets/AdminLTE-2.0.5/dist/img/elpiji.png" alt="User Image">
  </div>
  <!-- User name -->
  <div class="lockscreen-name">Supply Chain Management</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-items">
   
  <?php 
  $con    = 'Terhubung dengan database :)';
  $notcon = 'Tidak terhubung dengan database !';
  $stat = isset($_GET['status']) ? $_GET['status'] : $con;
  if($stat == 'error')
  {
    echo ' <h4 style="text-align:center;">'.$notcon.'</h4>';
  }else{
    echo ' <h4 style="text-align:center;">'.$con.'</h4>';
  }
  ?>
  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    PROJECT ANISA
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2017 <b><a target="_blank" href="https://github.com/Hekkydev/Supply-Chain-Management" class="text-black">Hekkydev</a></b><br>
    
  </div>
</div>
<!-- /.center -->


        <!-- jQuery 2.1.3 -->
        <script src="/assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="/assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="/assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%'
                });
            });
        </script>

        <script type="text/javascript">
          function login() {
              $('.loading').show();
          }
        </script>
    </body>
</html>
