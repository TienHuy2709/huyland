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
	            <p><span>Phone:</span> <a href="tel://1234567920"> 0981519920</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">huy@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website</span> <a href="<?php echo WEBROOT; ?>home/index/">huyland</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">

          <div class="col-md-6  d-flex">
            <form action="#" method="post" class="bg-white p-5 contact-form">
              <div class="form-group">
                <?php if(isset($_SESSION["error_user"])) echo $_SESSION["error_user"]; ?>
                <input type="email" class="form-control" name="email" required="" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="ten" required="" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="sdt" required="" placeholder="Your Phone">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="matkhau" required="" placeholder="Your Password">
              </div>
              <div class="form-group">
                <input type="submit" value="Đăng Ký" class="btn btn-primary py-3 px-5">
                <a class="btn py-3 px-5 btn-outline-secondary" href="<?php echo WEBROOT ?>user/login/">Đăng Nhập</a>
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