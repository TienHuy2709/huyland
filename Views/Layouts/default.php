<!DOCTYPE html>
<html lang="en">
<head>
	<title>Royal Estate - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/animate.css">

	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/magnific-popup.css">

	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/aos.css">

	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/ionicons.min.css">

	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/jquery.timepicker.css">


	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/flaticon.css">
	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/icomoon.css">
	<link rel="stylesheet" href="<?php echo WEBROOT; ?>/asset/css/style.css">
	<style type="text/css" media="screen">
		.kq{
			text-align: center;
			margin-top: 1rem;
			font-size: 24px;
			color: red;
			font-weight: 700;
			text-transform: uppercase;
		}
		.kq span{
			color: #615e5e;
		}
	</style>
</head>
<body>
	<div class="top">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col">
					<p class="social d-flex">
						<a href="#"><span class="icon-facebook"></span></a>
						<a href="#"><span class="icon-twitter"></span></a>
						<a href="#"><span class="icon-google"></span></a>
						<a href="#"><span class="icon-pinterest"></span></a>
					</p>
				</div>
				<div class="col d-flex justify-content-end">
					<p class="num"><span class="icon-phone"></span> 0981519920</p>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo WEBROOT; ?>home/index/">HUY<span>LAND</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?php if($this->request->controller=='home') echo 'active'; ?>"><a href="<?php echo WEBROOT; ?>home/index/" class="nav-link">Trang chủ</a></li>
					<li class="nav-item dropdown <?php if($this->request->controller=='category') echo 'active'; ?>"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="<?php echo WEBROOT; ?>category/index/">Thể Loại <b class="caret"></b></a>
						<ul class="dropdown-menu multi-column columns-1"> 
							<div class="row"> 
								<div class="col-sm-12"> 
									<ul class="multi-column-dropdown"> 
										<?php foreach ($category as $cate): ?>
										<li><a href="<?php echo WEBROOT; ?>category/allId/<?php echo $cate->id; ?>"><?php echo ucfirst($cate->tenloai); ?></a>
										</li> 
										<?php endforeach; ?>
									</ul> 
								
							</div> 
						</ul> 
					</li>
					<li class="nav-item <?php if($this->request->controller=='about') echo 'active'; ?> "><a href="<?php echo WEBROOT; ?>about/index/" class="nav-link">Giới Thiệu</a></li>
					<li class="nav-item <?php if($this->request->controller=='news') echo 'active'; ?> "><a href="<?php echo WEBROOT; ?>news/list/" class="nav-link">Tin Tức</a></li>
					<li class="nav-item <?php if($this->request->controller=='contact') echo 'active'; ?> "><a href="<?php echo WEBROOT; ?>contact/index/" class="nav-link">Liên Hệ</a></li>
					<li class="nav-item cta dropdown"><a href="contact.html" class="dropdown-toggle nav-link ml-lg-2" data-toggle="dropdown"><span class="icon-heart"></span> Yêu thích (<span id="countCookie"></span>)</a>
						<ul class="dropdown-menu multi-column columns-1"> 
							<div class="row"> 
								<div class="col-sm-12"> 
									<ul class="multi-column-dropdown" id="listCookie"> 

									</ul> 
							</div> 
						</ul> 
					</li>
					<li class="nav-item cta cta-colored"><a href="<?php echo WEBROOT ?>contact/index/" class="nav-link"><span class="icon-pencil"></span> Đăng tin</a></li>
					<li class="nav-item cta cta-log"><a href="<?php echo WEBROOT ?>contact/index/" class="nav-link"><span class="icon-log-in-outline"></span> Đăng nhập</a></li>
					<style type="text/css" media="screen">
						.cta ul{
							max-width: 100%;
							min-width: 240px;
						}
						.cta ul li a p{
							font-size: 13px;
							overflow: hidden;
							text-overflow: ellipsis;
							line-height: inherit;
							-webkit-line-clamp: 2;
							display: -webkit-box;
							-webkit-box-orient: vertical;
						}
						.ftco-navbar-light .navbar-nav > .nav-item.cta-log > a{
							background: #d60860;
						}
					</style>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
        <?php
        echo $content_for_layout;
        ?>
	<section class="ftco-section-parallax">
		<div class="parallax-img d-flex align-items-center">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
						<h2>Subcribe to our Newsletter</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
						<div class="row d-flex justify-content-center mt-5">
							<div class="col-md-8">
								<form action="#" class="subscribe-form">
									<div class="form-group d-flex">
										<input type="text" class="form-control" placeholder="Enter email address">
										<input type="submit" value="Subscribe" class="submit px-3">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Royalestate</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Buy</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Home For Sale</a></li>
							<li><a href="#" class="py-2 d-block">Open Houses</a></li>
							<li><a href="#" class="py-2 d-block">New Listing</a></li>
							<li><a href="#" class="py-2 d-block">Recently Reduce</a></li>
							<li><a href="#" class="py-2 d-block">Off-Market Homes</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Sell</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Sell Your Home</a></li>
							<li><a href="#" class="py-2 d-block">Get A Home Valuation</a></li>
							<li><a href="#" class="py-2 d-block">Local Home Prices</a></li>
							<li><a href="#" class="py-2 d-block">Guides &amp; Rules</a></li>
							<li><a href="#" class="py-2 d-block">Others</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Đại Học Công Nghiệp Hà Nội - Bắc Từ Liêm</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text"> 0981519920</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">fbkhongco@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>



		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="<?php echo WEBROOT; ?>/asset/js/jquery.min.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/popper.min.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/bootstrap.min.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/jquery.waypoints.min.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/jquery.stellar.min.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/owl.carousel.min.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/aos.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/jquery.animateNumber.min.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/jquery.timepicker.min.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/google-map.js"></script>
		<script src="<?php echo WEBROOT; ?>/asset/js/main.js"></script>
		<script  type="text/javascript" >
			$( document ).ready(function() {
					function load(){
							$.ajax({
							url : "<?php echo WEBROOT."home/listCookie" ?>",
							type : "post",
							dataType : "text",
							data : {},
							success : function(resule){
								$("#listCookie").html(resule);
							//Load lại trang theo thời gian cho phép
							/*setInterval(function(){
								window.location.reload();
							},100);*/
						},
						errorr: function(){
							$("#listCookie").html("Không có mảnh đất nào");
						}
					});
							$.ajax({
							url : "<?php echo WEBROOT."home/countCookie" ?>",
							type : "post",
							dataType : "text",
							data : {},
							success : function(resule){
								$("#countCookie").html(resule);
							//Load lại trang theo thời gian cho phép
							/*setInterval(function(){
								window.location.reload();
							},100);*/
						},
						errorr: function(){
							$("#countCookie").html("0");
						}
					})
				}
				
					load();
					

				$(document).on('click','.deleteCookie',function(){
					var id_dat = $(this).data('id_delete'); 
					$.ajax({
						url : "<?php echo WEBROOT."home/deleteHeart/"; ?>",
						type : "post",
						dataType : "text",
						data : {
							id : id_dat,
						},
						success : function(resule){

							alert("Đã xoá khỏi danh sách yêu thích");
							load();
							count();
						},
						errorr: function(){
							alert('Xoá không thành công');
						}
					});
				});

				<?php if($this->request->controller=='detailland'): ?>
				$("#addCookie").on('click',function(){
					$.ajax({
						url : "<?php echo WEBROOT."home/addHeart/".$detail->id; ?>",
						type : "post",
						dataType : "text",
						data : {},
						success : function(resule){
							 //$("#displayUser").html(resule);
							//Load lại trang theo thời gian cho phép
							/*setInterval(function(){
								window.location.reload();
							},100);*/
							alert("Đã thêm vào danh sách yêu thích");
							load();
							count();
						},
						errorr: function(){
							alert('thêm không thành công');
							
						}
						
					});
				});
			<?php endif; ?>
			})
		</script>
	</body>
	</html>