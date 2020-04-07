<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Grains an Agriculture Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="utf-8" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant+Unicase:300,400,500,600,700&subset=cyrillic,latin-ext,vietnamese" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" />
<link rel="stylesheet" href="<?php echo e(asset('public/homepage/css/bootstrap.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('public/homepage/css/chocolat.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('public/homepage/css/animate.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('public/homepage/css/style.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('public/homepage/css/font-awesome.css')); ?>">

<script src="<?php echo e(asset('public/homepage/js/jquery-1.11.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/homepage/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('public/homepage/js/modernizr.js')); ?>"></script>
<script>
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); }
</script>
<script>
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body>
<div class="banner">
	<nav class="navbar navbar-default">
		<div class="container">
		<div class="navbar-header navbar-left">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="w3_navigation_pos">
				<h1><a href="index.html"><span>T</span></a></h1>
			</div>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			<nav class="link-effect-2" id="link-effect-2">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html" class="scroll"><span data-hover="Home">Trang chủ</span></a></li>
					<li><a href="#about" class="scroll"><span data-hover="About" >Giới thiệu</span></a></li>
					<li><a href="#services" class="scroll"><span data-hover="Services">Dịch vụ</span></a></li>
					<li><a href="#portfolio" class="scroll"><span data-hover="Portfolio">Hình ảnh</span></a></li>
					<li><a href="#team" class="scroll"><span data-hover="Portfolio">Nhân sự</span></a></li>
					<li><a href="#contact" class="scroll"><span data-hover="Contact">Liên hệ</span></a></li>
				</ul>
			</nav>
		</div>
		</div>
	</nav>
	<div class="banner-info">
		<div class="container">
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="w3ls-text">
								<h5>Hợp tác xã trà vinh</h5>
								<h3>Conet tristiq velt biben</h3>
								<p>Cras ultrices lorem a hendrerit condimentum. Sed at eros odio. Nulla justo arcu, rutrum a suscipit.</p>
							</div>
						</li>
						<li>
							<div class="w3ls-text">
								<h5>Hợp tác xã trà vinh</h5>
								<h3>Conet tristiq velt biben</h3>
								<p>Proin enim massa, vestibulum ac accumsan gravida, aliquet eget dui. Cras non accumsan velit. sagittis.</p>
							</div>
						</li>
						<li>
							<div class="w3ls-text">
								<h5>Hợp tác xã trà vinh</h5>
								<h3>Conet tristiq velt biben</h3>
								<p>Phasellus dictum hendrerit ante quis vestibulum. Fusce tellus est, pulvinar sed mollis et, eleifend.</p>
							</div>
						</li>
					</ul>
				</div>
				<script src="<?php echo e(asset('public/homepage/js/responsiveslides.min.js')); ?>"></script>
				<script>
					$(function () {
					  $("#slider4").responsiveSlides({
						auto: true,
						pager:true,
						nav:true,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
					});
				 </script>
			</div>
		</div>
		<div class="banner-bottom">
			<div class="container">
				<div class="col-md-4 col-sm-4 agile-banner-bottom-grid1 b1">
					<h3>quyền lợi</h3>
					<p>Đại diện và bảo vệ quyền, lợi ích chính đáng, hợp pháp của các thành viên.</p>
				</div>
				<div class="col-md-4 col-sm-4 agile-banner-bottom-grid1 b2">
					<h3>tư vấn</h3>
					<p>Hỗ trợ và cung cấp các dịch vụ tư vấn cần thiết cho các HTX thành viên.</p>
				</div>
				<div class="col-md-4 col-sm-4 agile-banner-bottom-grid1">
					<h3>đóng góp</h3>
					<p>Tham gia đóng góp, xây dựng các chính sách, pháp luật có liên quan đến kinh tế tập thể.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="w3-arrow bounce animated">
			<a href="#about" class="scroll"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
		</div>

	</div>
</div>

<div class="jarallax agileits-about agile-section" id="about">
	<div class="container">
		<span class="wthree-line wthree-left"></span>
		<span class="wthree-line wthree-right"></span>
		<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
		<h3 class="agileits-title text-center">giới thiệu</h3>
		<div class="w3agile-about">
			<div class="col-md-6 col-sm-6 col-xs-6 w3_agileits-about-left">
				<div class="agile-about-left">
					<h2 class="agileits-title">lorem</h2>
					<p>This is dummy text</p>
				</div>
				<div class="w3_agileits-about-bottom">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 w3_agileits-about-right">
				<span class="w3ls-abt"></span>
				<p>Ngày 19/07/2016 Chủ tịch UBND tỉnh Trà Vinh đã ban hành quyết định số 34/2016/QĐ-UBND về “Quy định về chức năng, nhiệm vụ, quyền hạn và cơ cấu tổ chức của Liên minh HTX tỉnh Trà Vinh”, trong đó có một số nội dung liên quan đến công tác quản lý nhà nước về tổ chức và hoạt động của các HTX, nội dung được trích dẫn như sau:</p>
				<span class="w3ls-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin lectus et velit pellentesque dictum.</span>
				<ul class="w3l-list">
					<li><span class="w3ls-type fa fa-angle-double-right" aria-hidden="true"></span>Lorem ipsum dolor</li>
					<li><span class="w3ls-type fa fa-angle-double-right" aria-hidden="true"></span>Lorem ipsum dolor</li>
					<li><span class="w3ls-type fa fa-angle-double-right" aria-hidden="true"></span>Lorem ipsum dolor</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="jarallax agileits-services agile-section" id="services">
	<div class="container">
		<span class="wthree-line wthree-left"></span>
		<span class="wthree-line wthree-right"></span>
		<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
		<h3 class="agileits-title text-center">dịch vụ</h3>
		<div class="w3agile-services text-center">
			<a href="#about">
			<div class="col-md-3 w3_agileits-service-grid">
				<span class="w3ls-icon fa fa-map" aria-hidden="true"></span>
				<h4> Bản đồ </h4>
				<p>Thông tin vị trí các thửa đất, vùng nguyên liệu, các điểm tập kết nông sản thu hoạch</p>
			</div>
			</a>
			<div class="col-md-3 w3_agileits-service-grid sr1">
				<span class="w3ls-icon fa fa-cog fa-spin" aria-hidden="true"></span>
				<h4>canh tác</h4>
				<p>Thông tin quá trình canh tác, kế hoạch sản xuất của hợp tác xã, nhật ký canh tác, chi phí sản xuất</p>
			</div>
			<div class="col-md-3 w3_agileits-service-grid sr2">
				<span class="w3ls-icon fa fa-tint" aria-hidden="true"></span>
				<h4>thời tiết</h4>
				<p>Thông tin thời tiết theo thời gian thực về nhiệt độ, độ ẩm, tốc độ gió, hướng gió, lượng mưa</p>
			</div>
			<div class="col-md-3 w3_agileits-service-grid">
				<span class="w3ls-icon fa fa-shopping-basket" style="color:red" aria-hidden="true"></span>
				<h4>thị trường</h4>
				<p>Thông tin giá cả thị trường nông sản, chính sách nông nghiệp, vật tư nông nghiệp, dịch bệnh.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="jarallax wthreelocationsaits agile-section" id="portfolio">
	<div class="container">
		<span class="wthree-line wthree-left"></span>
		<span class="wthree-line wthree-right"></span>
		<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
			<h3 class="agileits-title text-center">hình ảnh</h3>
			<section class="grid3d vertical" id="grid3d">
				<div class="grid-wrap">
					<div class="grid">
						<figure class="col-md-4 effect-zoe"><img src="<?php echo e(asset('public/homepage/images/g1.jpg')); ?>" /><figcaption><h4>CROPS</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="<?php echo e(asset('public/homepage/images/g7.jpg')); ?>" /><figcaption><h4>PLOUGH</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="<?php echo e(asset('public/homepage/images/g3.jpg')); ?>" /><figcaption><h4>LIVESTOCK</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="<?php echo e(asset('public/homepage/images/g4.jpg')); ?>" /><figcaption><h4>FARMING</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="<?php echo e(asset('public/homepage/images/g5.jpg')); ?>" /><figcaption><h4>GRAINS</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="<?php echo e(asset('public/homepage/images/g1.jpg')); ?>" /><figcaption><h4>RAISING</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="<?php echo e(asset('public/homepage/images/g2.jpg')); ?>" /><figcaption><h4>PADDY</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="<?php echo e(asset('public/homepage/images/g7.jpg')); ?>" /><figcaption><h4>CROPS</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="<?php echo e(asset('public/homepage/images/g6.jpg')); ?>" /><figcaption><h4>GRAINS</h4></figcaption></figure>
					</div>
				</div>
				<div class="content">
					<div>
						<div class="dummy-img dummy-img-1"><img src="<?php echo e(asset('public/homepage/images/g1.jpg')); ?>" /></div>
						<p class="dummy-text aitsheadingw3">CROPS</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-2"><img src="<?php echo e(asset('public/homepage/images/g7.jpg')); ?>" /></div>
						<p class="dummy-text aitsheadingw3">PLOUGH</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-3"><img src="<?php echo e(asset('public/homepage/images/g3.jpg')); ?>" /></div>
						<p class="dummy-text aitsheadingw3">LIVESTOCK</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-4"><img src="<?php echo e(asset('public/homepage/images/g4.jpg')); ?>" /></div>
						<p class="dummy-text aitsheadingw3">FARMING</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-5"><img src="<?php echo e(asset('public/homepage/images/g5.jpg')); ?>" /></div>
						<p class="dummy-text aitsheadingw3">GRAINS</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-6"><img src="<?php echo e(asset('public/homepage/images/g1.jpg')); ?>" /></div>
						<p class="dummy-text aitsheadingw3">RAISING</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-7"><img src="<?php echo e(asset('public/homepage/images/g2.jpg')); ?>" /></div>
						<p class="dummy-text aitsheadingw3">PADDY</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-8"><img src="<?php echo e(asset('public/homepage/images/g7.jpg')); ?>" /></div>
						<p class="dummy-text aitsheadingw3">CROPS</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-9"><img src="<?php echo e(asset('public/homepage/images/g6.jpg')); ?>" /></div>
						<p class="dummy-text aitsheadingw3">GRAINS</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<span class="loading"></span>
					<span class="icon close-content"><i class="fa fa-times" aria-hidden="true"></i></span>
				</div>
			</section>
		</div>
	</div>

<div class="blog jarallax  agile-section" id="blog">
	<div class="container">
		<span class="wthree-line wthree-left"></span>
		<span class="wthree-line wthree-right"></span>
		<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
		<h3 class="agileits-title text-center">thông tin mới nhất</h3>
		<div class="w3-blog-grids">
			<div class="col-md-4 col-sm-4 col-xs-4 w3-blog">
				<div class="agileits-img">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<img src="<?php echo e(asset('public/homepage/images/2.jpg')); ?>" alt="" class="img-responsive"/>
					</a>
				</div>
				<div class="agileits-blog-bottom">
					<div class="w3-agile-post-info">
						<ul>
							<li class="w3ls-icon-left">By <a href="#">Admin</a></li>
							<li class="w3ls-icon-right"><i class="fa fa-heart" aria-hidden="true"></i>40</li>
						</ul>
						<div class="clearfix"></div>
						<a href="#" data-toggle="modal" data-target="#myModal"><h5>25 jan:</h5>	<h4>blog post</h4></a>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus...</p>
					</div>
					<a href="#"><i class="w3-agile-share fa fa-share-alt" aria-hidden="true"></i></a>
					<div class="w3-blog w3l-button">
						<a href="#" data-toggle="modal" data-target="#myModal">More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4 w3-blog b2">
				<div class="agileits-blog-bottom">
					<div class="w3-agile-post-info">
						<ul>
							<li class="w3ls-icon-left">By <a href="#">Admin</a></li>
							<li class="w3ls-icon-right"><i class="fa fa-heart" aria-hidden="true"></i>40</li>
						</ul>
						<div class="clearfix"></div>
						<a href="#" data-toggle="modal" data-target="#myModal"><h5>20 feb:</h5>	<h4>blog post</h4></a>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus...</p>
					</div>
					<a href="#"><i class="w3-agile-share fa fa-share-alt" aria-hidden="true"></i></a>
					<div class="w3-blog w3l-button">
						<a href="#" data-toggle="modal" data-target="#myModal">More</a>
					</div>
				</div>
				<div class="agileits-img">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<img src="<?php echo e(asset('public/homepage/images/10.jpg')); ?>" alt="" class="img-responsive"/>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4 w3-blog b3">
				<div class="agileits-img">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<img src="<?php echo e(asset('public/homepage/images/9.jpg')); ?>" alt="" class="img-responsive"/>
					</a>
				</div>

				<div class="agileits-blog-bottom">
					<div class="w3-agile-post-info">
						<ul>
							<li class="w3ls-icon-left">By <a href="#">Admin</a></li>
							<li class="w3ls-icon-right"><i class="fa fa-heart" aria-hidden="true"></i>40</li>
						</ul>
						<div class="clearfix"></div>
						<a href="#" data-toggle="modal" data-target="#myModal"><h5>15 mar:</h5>	<h4>blog post</h4></a>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus...</p>
					</div>
					<a href="#"><i class="w3-agile-share fa fa-share-alt" aria-hidden="true"></i></a>
					<div class="w3-blog w3l-button">
						<a href="#" data-toggle="modal" data-target="#myModal">More</a>
					</div>
			  </div>
			</div>
			<div class="clearfix"></div>
		</div>
     </div>
    </div>

<div class="jarallax agileits-team agile-section" id="team">
	<div class="container">
		<span class="wthree-line wthree-left"></span>
		<span class="wthree-line wthree-right"></span>
		<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
		<h3 class="agileits-title text-center">nhân sự</h3>
		<div class="w3agile-team">
			<div class="col-md-4  col-sm-4 w3_agileits-team-grid">
				<img src="<?php echo e(asset('public/homepage/images/4.jpg')); ?>" class="img-responsive" alt="">
				<div class="team-text">
					<h4>Jones </h4>
					<p>Dept. of Agriculture</p>
					<span>+12 345 6789</span>
				</div>
				 <div class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
				</div>
				<div class="team-msg">
					<a class="icon gp" href="#"><i class="fa fa-envelope-o"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 col-sm-4 w3_agileits-team-grid t2">
				<img src="<?php echo e(asset('public/homepage/images/5.jpg')); ?>" class="img-responsive" alt="">
				<div class="team-text">
					<h4>Thompkins</h4>
					<p>Dept. of Forestry</p>
					<span>+12 345 6789</span>
				</div>
				 <div class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
				</div>
				<div class="team-msg">
					<a class="icon gp" href="#"><i class="fa fa-envelope-o"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 col-sm-4 w3_agileits-team-grid">
				<img src="<?php echo e(asset('public/homepage/images/6.jpg')); ?>" class="img-responsive" alt="">
				<div class="team-text">
					<h4>Evans </h4>
					<p>Dept. of Farming</p>
					<span>+12 345 6789</span>
				</div>
				 <div class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
				</div>
				<div class="team-msg">
					<a class="icon gp" href="#"><i class="fa fa-envelope-o"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="jarallax contact-form agile-section" id="contact">
	<div class="container">
	<span class="wthree-line wthree-left"></span>
	<span class="wthree-line wthree-right"></span>
	<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
	<h3 class="agileits-title text-center">liên  hệ</h3>
	<div class="w3agile-contact text-center">
			<div class="col-md-3 col-sm-3 w3_agileits-contact-grid">
				<span class="w3ls-icon fa fa-map-marker" aria-hidden="true"></span>
				<h4>Địa chỉ</h4>
				<ul>
					<li>3515 Carriage Court</li>
					<li>Palm Springs</li>
					<li>California.</li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-3 w3_agileits-contact-grid sr1">
				<span class="w3ls-icon fa fa-phone" aria-hidden="true"></span>
				<h4>điện thoại</h4>
				<ul>
					<li>+12 345 6789</li>
					<li>+12 345 6789</li>
					<li>+12 345 6789</li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-3 w3_agileits-contact-grid sr2">
				<span class="w3ls-icon fa fa-envelope-o fa-lg" aria-hidden="true"></span>
				<h4>email</h4>
				<ul>
					<li><a href="mailto:info@example.com">info@example.com</a></li>
					<li><a href="mailto:info@example.com">info@example.com</a></li>
					<li><a href="mailto:info@example.com">info@example.com</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-3 w3_agileits-contact-grid">
				<span class="w3ls-icon fa fa-clock-o" aria-hidden="true"></span>
				<h4>giờ làm việc</h4>
				<ul>
					<li>Monday-Friday : <span> 9:00-18:00</span></li>
					<li>saturday : <span>11:00-17:00</span></li>
					<li>sunday :<span>closed</span></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<form action="#" method="post">
			<div class="w3ls-input">
				<input type="text" placeholder="Name" name="name" required="">
				<div class="w3l-icon w3ls-form-icon1"><i class="w3ls-icon fa fa-user" aria-hidden="true"></i></div>
			</div>
			<div class="w3ls-input">
				<input type="email" placeholder="Email" name="email" class="email" required="">
				<div class="w3l-icon w3ls-form-icon2"><i class="w3ls-icon  fa fa-envelope-o fa-lg" aria-hidden="true"></i></div>
			</div>
			<div class="w3ls-input">
				<input type="text" class="phone" placeholder="phone" name="phone" required="">
				<div class="w3l-icon w3ls-form-icon3"><i class="w3ls-icon  fa fa-phone" aria-hidden="true"></i></div>
			</div>
			<div class="clear"></div>
			<textarea placeholder="Message" name="message" required=""></textarea>
			<button class="btn1">Submit message</button>
		</form>
	</div>
</div>

<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">grains</h4>
			</div>
			<div class="modal-body">
				<div class="agileits-w3layouts-info">
					<img src="<?php echo e(asset('public/homepage/images/2.jpg')); ?>" alt="" />
					<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="agileits_w3layouts-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509687.090753893!2d-123.76387427440008!3d37.18697025540024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C+USA!5e0!3m2!1sen!2sin!4v1491201047627" style="border:0" allowfullscreen></iframe>
</div>

<div class="agileits_w3layouts-footer">
	<div class="col-md-6  agileinfo-copyright">
		<p>© 2017 Grains. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p>
	</div>
	<div class="col-md-6 agileinfo-icons">
		<ul>
			<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
			<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
			<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
		</ul>
	</div>
</div>

<script src="<?php echo e(asset('public/homepage/js/classie.js')); ?>"></script>
<script src="<?php echo e(asset('public/homepage/js/helper.js')); ?>"></script>
<script src="<?php echo e(asset('public/homepage/js/grid3d.js')); ?>"></script>
<script>
	new grid3D( document.getElementById( 'grid3d' ) );
</script>

<script src="<?php echo e(asset('public/homepage/js/jarallax.js')); ?>"></script>
<script src="<?php echo e(asset('public/homepage/js/SmoothScroll.min.js')); ?>"></script>
<script>
	$('.jarallax').jarallax({
		speed: 0.5,
		imgWidth: 1366,
		imgHeight: 768
	})
</script>

<script>
	$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });

		});
</script>

<script src="<?php echo e(asset('public/homepage/js/move-top.js')); ?>"></script>
<script src="<?php echo e(asset('public/homepage/js/easing.js')); ?>"></script>
<script>
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</body>
</html><?php /**PATH D:\Wamp64\www\htxtravinh\resources\views/homepage/index.blade.php ENDPATH**/ ?>