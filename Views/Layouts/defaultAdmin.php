<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="<?php echo WEBROOT; ?>/asset/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8" ></script>

  <title>NTH Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo WEBROOT; ?>/asset/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo WEBROOT; ?>/asset/backend/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo WEBROOT; ?>/asset/backend/css/sb-admin.css" rel="stylesheet">
   <!-- Bootstrap core JavaScript-->
  <script src="<?php echo WEBROOT; ?>/asset/backend/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo WEBROOT; ?>/asset/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo WEBROOT; ?>/asset/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo WEBROOT; ?>/asset/backend/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo WEBROOT; ?>/asset/backend/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo WEBROOT; ?>/asset/backend/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo WEBROOT; ?>/asset/backend/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo WEBROOT; ?>/asset/backend/js/demo/datatables-demo.js"></script>
  <script src="<?php echo WEBROOT; ?>/asset/backend/js/demo/chart-area-demo.js"></script>
                        <style type="text/css">
                                    .pagination{padding:0px; margin:0px;}
                                </style>
  


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <div class="navbar-brand mr-1"><a class="navbar-brand" href="<?php echo WEBROOT; ?>home/index/">HUY<span><b>LAND</b></span></a>
      <span>ADMIN</span>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
      </button>
    </div>
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i> <?php echo $_SESSION["email_admin"]; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo WEBROOT; ?>admin/log/logout/" onclick="return window.confirm('Bạn có chắc chắn muốn đăng xuất');">Logout</a>
        </div>
      </li>
      <li style="color: white;margin-top:8px; ">
        <!-- <?php if(($_SESSION["name"])!="") echo $_SESSION["name"];
             else echo $_SESSION["email"];
          ?>  -->
          <i class=""></i>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo WEBROOT; ?>admin/home/index/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="#">Register</a>
          <a class="dropdown-item" href="#">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="#">404 Page</a>
          <a class="dropdown-item" href="#">Blank Page</a>
        </div>
      </li>
      <li class="nav-item <?php if($this->request->controller=='user') echo 'active'; ?>">
        <a class="nav-link" href="<?php echo WEBROOT; ?>admin/user/index/">
          <i class="fas fa-fw fa-table"></i>
          <span>Quản Lý Người Dùng</span></a>
      </li>
      <li class="nav-item <?php if($this->request->controller=='category') echo 'active'; ?>">
        <a class="nav-link" href="<?php echo WEBROOT; ?>admin/category/index/">
          <i class="fas fa-fw fa-table"></i>
          <span>Quản Lý Thể Loại</span></a>
      </li>
       <li class="nav-item <?php if($this->request->controller=='land') echo 'active'; ?>">
        <a class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
          <i class="fas fa-fw fa-table"></i>
          <span>Quản Lý Các Mảnh Đất</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo WEBROOT; ?>admin/land/index/">Danh sách đất</a>
            </div>
      </li>
      <li class="nav-item <?php if($this->request->controller=='new') echo 'active'; ?>">
        <a class="nav-link active" href="<?php echo WEBROOT; ?>admin/new/index/">
          <i class="fas fa-fw fa-table"></i>
          <span>Quản Lý Tin Tức</span></a>
      </li>
      <li class="nav-item <?php if($this->request->controller=='contact') echo 'active'; ?>">
        <a class="nav-link" href="<?php echo WEBROOT; ?>admin/contact/index/">
          <i class="fas fa-fw fa-table"></i>
          <span>Quản Lý Liên Hệ Người Dùng</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
  <?php
        echo $content_for_layout;
        ?>
        <script  type="text/javascript" >
          $( document ).ready(function() {
            function loadcity(){
              $.ajax({
                url : "<?php echo WEBROOT."getAddress/index"?>",
                <?php if ($this->request->action == 'edit'):?>
                  type : "post",
                <?php else: ?>
                  type : "get",
                <?php endif; ?>
                dataType : "text",
                data : {
                  <?php if ($this->request->action == 'edit'):?>
                       id: <?php echo $id_edit; ?>,
                   <?php endif; ?>
                },
                success : function(resule){
                  $("#thanhpho").html(resule);
                            //Load lại trang theo thời gian cho phép
                            /*setInterval(function(){
                                window.location.reload();
                              },100);*/
                            },
                          });
            }
            loadcity();
            $(document).on('click','#thanhpho',function(){
              var id_huyen = $("#thanhpho").val(); 
              $.ajax({
                url : "<?php echo WEBROOT."getAddress/getHuyen"; ?>",
                type : "post",
                dataType : "text",
                data : {
                  id : id_huyen,
                },
                success : function(resule){
                  $("#displayHuyen").html(resule);
                },
              });
            });

            $(document).on('click','#huyen',function(){
              var id_xa = $("#huyen").val(); 
              $.ajax({
                url : "<?php echo WEBROOT."getAddress/getStreet"; ?>",
                type : "post",
                dataType : "text",
                data : {
                  id : id_xa,
                },
                success : function(resule){
                  $("#displayXa-Duong").html(resule);
                },
              });
            });

            $(document).on('click','#diadiem',function(){
              var tp = $("#thanhpho option:selected").text();
              var huyen = $("#huyen option:selected").text();
              var xaduong = $("#xa_duong option:selected").text();
              var lat = $("#xa_duong option:selected").data('lat_land');
              var lng = $("#xa_duong option:selected").data('lng_land');
              $("#diadiem").val(xaduong + ' - ' + huyen + ' - ' +tp);
              $("#toado").val(lat +' '+ lng);
            });
          })
        </script>