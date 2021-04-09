<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Đăng nhập</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> Đại Học Công Nghiệp Hà Nội - Bắc Từ Liêm</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://0981519920"> 0981519920</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto://chi1cothe@gmail.com">huy@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website</span> <a href="<?php echo WEBROOT; ?>home/index/">huyland</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <style type="text/css" media="screen">
            p.error-user {
              color: red;font-size: 14px;text-align: center;
            }
            p.error-user span {
              font-size: 12px;
            }
          </style>
          <div class="col-md-6  d-flex">
            <form action="#" method="post" class="bg-white p-5 contact-form">
              <?php if(isset($_SESSION["error_user"])) echo $_SESSION["error_user"]; ?>
              <div class="form-group">
                <input type="email" class="form-control" name="email" required="" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="matkhau" required="" placeholder="Your Password">
              </div>
              <div class="form-group">
                <input type="submit" value="Đăng nhập" class="btn btn-primary py-3 px-5">
                <a class="btn py-3 px-5 btn-outline-secondary" href="<?php echo WEBROOT; ?>user/create/ ">Đăng Ký</a>
              </div>
            </form>
          
          </div>
        <div class="col-md-6 d-flex">
            <img src="<?php echo WEBROOT; ?>/asset/images/properties-6.jpg" alt="Image placeholder" class="img-fluid">
          </div>
          
        </div>
      </div>
    </section>
    <?php if(isset($_SESSION["error_user"])) unset($_SESSION["error_user"]); ?>