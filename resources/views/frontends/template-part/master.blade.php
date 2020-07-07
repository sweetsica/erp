<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#151515">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#151515">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#151515">
		<title>SCity - Quản lý môi trường đô thị</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56"href="{{asset('assets/frontends/images/fav-icon/icon.png')}}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css"href="{{asset('assets/frontends/css/style.css')}}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css"href="{{asset('assets/frontends/css/responsive.css')}}">
		<!-- Theme-Color css -->
		<link rel="stylesheet" id="jssDefault"href="{{asset('assets/frontends/css/color.css')}}">
		<!-- Custom css -->
		<link rel="stylesheet" id="jssDefault"href="{{asset('assets/frontends/css/custom.css')}}">
		<!-- Boostrap css-->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/frontends/vendor/boostrap/css/boostrap.min.css')}}">
		<style type="text/css">
			.service-style-two .single-block .img-box img {
			    width: 366px;
			    height: 265px;
			}
		</style>
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
<!-- 			<div id="loader-wrapper">
				<div id="loader"></div>
			</div> -->

			<!-- ==================== Style Switcher ==================== -->
			<div class="switcher">
				<!-- Switcher button -->
				<div class="switch-btn">
					<button><i class="fa fa-cog fa-spin"></i></button>
				</div>

				<!-- switcher body -->
				<div class="switch-menu">
					<h5 class="title">Style Switcher</h5>
					<!-- Theme color changer -->
					<div class="switcher-container">
						<h5>Color Skins</h5>
						<ul id="styleOptions" title="Switch Color" class="clearfix">
							<li><a href="{{asset('assets/frontends/javascript: void(0)')}}" data-theme="color" class="color1"></a></li>
							<li><a href="{{asset('assets/frontends/javascript: void(0)')}}" data-theme="color-2" class="color2"></a></li>
							<li><a href="{{asset('assets/frontends/javascript: void(0)')}}" data-theme="color-3" class="color3"></a></li>
							<li><a href="{{asset('assets/frontends/javascript: void(0)')}}" data-theme="color-4" class="color4"></a></li>
							<li><a href="{{asset('assets/frontends/javascript: void(0)')}}" data-theme="color-5" class="color5"></a></li>
						</ul>
					</div>
				</div> <!-- /switch-menu -->
			</div> <!-- /.switcher -->



			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<header class="theme-main-header theme-header-two">
				<div class="top-header bg-color">
					<div class="container clearfix">
						<p class="float-left email-us">Địa chỉ email của chúng tôi : <a href="{{asset('assets/frontends/mailto:veaportal@vea.gov.vn')}}">veaportal@vea.gov.vn</a></p>
						<p class="float-right call-us">Hãy liên hệ với chúng tôi khi bạn cần : <a href="{{asset('assets/frontends/tel:(024) 38223189')}}">(024) 38223189</a></p>
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="middle-header">
					<div class="container clearfix">
						<!-- ================= Logo ==================== -->
						<div class="logo"><a href="{{Route('home')}}"><img src="{{asset('assets/frontends/images/Edit/logo-2.png')}}" alt="logo"></a></div>

						<ul class="our-address clearfix">
							<li>
								<i class="icon flaticon-map"></i>
								<p>Số 10, Tôn Thất Thuyết, Phường Mỹ Đình, <br>Quận Nam Từ Liêm, <span>Hà Nội</span> </p>
							</li>
							<li>
								<i class="icon flaticon-clock"></i>
								<p>Thứ Hai - Thứ Sáu  <br><span> 8.00 - 17.00 </span></p>
							</li>
							<li>
								<i class="icon flaticon-phone-call"></i>
								<p><a href="{{asset('assets/frontends/#')}}">(024) 38223189</a> <br><span>Gọi ngay</span></p>
							</li>
						</ul>
					</div>
				</div> <!-- /.middle-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="inner-wrapper clearfix">
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li class="active"><a href="{{Route('home')}}">Trang chủ</a>
									    </li>
									    <li><a href="javascript:void(0)" style="padding-right: 20px;">Tin tức</a>
									    	<ul class="dropdown">
									    		<li><a href="{{Route('nghi_quyet_chi_thi')}}">Nghị quyết, chỉ thị</a></li>
									    		<li><a href="{{Route('chien_luoc_quy_hoach')}}">Chiến lược, kế hoạch</a></li>
									    		<li><a href="{{Route('van_ban_quy_pham_phap_luat')}}">Văn bản quy phạm pháp luật</a></li>
									    		<li><a href="{{Route('dieu_uoc_quoc_te')}}">Điều ước quốc tế</a></li>
									    		<li><a href="{{Route('chuong_trinh_de_an_du_an')}}">Chương trình, đề án, dự án</a></li>
									       </ul>
									    </li>
									    <li><a href="javascript:void(0)" style="padding-right: 20px;">Hoạt động tiêu biểu</a>
									    	<ul class="dropdown">
									    		<li><a href="{{Route('danh_gia_tac_dong_moi_truong')}}">Đánh giá tác động MT</a></li>
									    		<li><a href="{{Route('giay_phep_moi_truong')}}">Giấy phép môi trường</a></li>
									    		<li><a href="{{Route('giam_sat_thanh_tra_kiem_tra')}}">Giam sát, thanh tra, kiểm tra</a></li>
									    		<li><a href="{{Route('quan_trac_moi_truong')}}">Quan trắc môi trường</a></li>
									    		<li><a href="{{Route('truyen_thong_nang_cao_nhan_thuc')}}">Truyền thông</a></li>
									    		<li><a href="{{Route('thong_tin_du_lieu_bao_cao_moi_truong')}}">TT, DL và báo cáo môi trường</a></li>
									    		<li><a href="{{Route('khoa_hoc_cong_nghe_va_hop_tac_quoc_te')}}">KHCN và hợp tác quốc tế</a></li>
									       </ul>
									    </li>
									    <li><a href="javascript:void(0)" style="padding-right: 20px;">Tài liệu</a>
									    	<ul class="dropdown">
									    		<li><a href="{{Route('Luat')}}">Luật</a></li>
									    		<li><a href="{{Route('Nghi_dinh')}}">Nghị định</a></li>
									    		<li><a href="{{Route('Thong_tu')}}">Thông tư</a></li>
									    		<li><a href="{{Route('Quy_chuan')}}">Quy chuẩn</a></li>
									    		<li><a href="{{Route('Van_ban_khac')}}">Văn bản khác</a></li>
									       </ul>
									    </li>
									   <li><a href="javascript:void(0)" style="padding-right: 20px;">Giới thiệu</a>
										   <ul class="dropdown">
											   <li><a href="{{Route('lanh_dao_tong_cuc')}}">Lãnh đạo tổng cục</a></li>
											   <li><a href="{{Route('chuc_nang_nhiem_vu')}}">Chức năng nhiệm vụ</a></li>
											   <li><a href="{{Route('so_do_to_chuc')}}">Sơ đồ tổ chức</a></li>
											   <li><a href="{{Route('cac_don_vi_truc_thuoc')}}">Các đơn vị trực thuộc</a></li>
										   </ul>
									   </li>
                                       <li><a href="{{Route('tin_tuc_moi_truong')}}">Tin tức môi trường</a></li>
                                       <li><a href="{{Route('moitruong_info')}}">Thông số</a></li>
									   <li><a href="{{Route('lien_he')}}">Liên hệ</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->

					   		<ul class="social-icon float-right">
					   			{{--<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-search" aria-hidden="true"></i></a></li>--}}
								<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
							</ul>
						</div> <!-- /.inner-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.theme-main-header -->

			@yield('content-homepage')


<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-two">
				<div class="main-footer-widget">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-sm-6 about-widget">
								<div class="logo">
									<a href="{{asset('assets/frontends/index.html')}}">
										<img src="{{asset('assets/frontends/images/Edit/logo-2.png')}}" alt="logo">
									</a></div>
								<p>10, Tôn Thất Thuyết, Phường Mỹ Đình, Quận Nam Từ Liêm <span> Hà Nội</span> </p>
								<ul class="social-icon">
									<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><a href="{{asset('assets/frontends/#')}}"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.about-widget -->

							<div class="col-lg-2 col-sm-6 list-widget">
								<h6 class="title">Liên kết</h6>
								<ul>
									<li><a href="{{asset('assets/frontends/index.html')}}">Trang chủ</a></li>
									<li><a href="{{asset('assets/frontends/about.html')}}">Giới thiệu</a></li>
									<li><a href="{{asset('assets/frontends/service-v1.html')}}">Tin tức</a></li>
									<li><a href="{{asset('assets/frontends/blog-classic.html')}}">Dịch vụ</a></li>
									<li><a href="{{asset('assets/frontends/project-grid.html')}}">Tài liệu</a></li>
								</ul>
							</div> <!-- /.list-widget -->

							<div class="col-lg-4 col-sm-6 twitter-widget">
								<h6 class="title">Liên hệ</h6>
								<ul>
									<li class="clearfix" style="padding: 0px">
										Cơ quan chủ quản: Tổng cục Môi trường
										Giấy phép số 153/GP-TTGT do Bộ Thông tin và Truyền thông cấp ngày 26 tháng 10 năm 2015
										Người chịu trách nhiệm chính: TS. Nguyễn Văn Tài – Tổng cục trưởng Tổng cục Môi trường
									</li>
								</ul>
							</div> <!-- /.twitter-widget -->

							<div class="col-lg-3 col-sm-6 subscribe-widget">
								<h6 class="title">Nhận tin tức</h6>
								<form action="#">
									<input type="email" placeholder="Địa chỉ email">
									<button><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								</form>
							</div> <!-- /.subscribe-widget -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.main-footer-widget -->
			</footer> <!-- /.theme-footer -->




	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>



			<div class="modal fade" id="schedule-box" tabindex="-1" role="dialog">
			  <div class="modal-dialog container" role="document">
			    <div class="modal-content">
			    	<div class="appoinment_form_wrapper clear_fix">
			    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
			    		<form action="#">
			    			<h2 class="title">Make an Appointment.</h2>
							<div class="row">
								<div class="col-lg-6"><input type="text" placeholder="Name"></div>
								<div class="col-lg-6"><input type="email" placeholder="Email"></div>
								<div class="col-lg-6"><input type="text" class="datepicker" placeholder="Date"></div>
								<div class="col-lg-6"><input type="text" class="timepicker" placeholder="Time"></div>
								<div class="col-12">
									<select class="form-control" id="exampleSelect1">
									    <option>I would like to discuss</option>
									    <option>Business Services</option>
									    <option>Consumer Product</option>
									    <option>Financial Services</option>
									    <option>Software Research</option>
									</select>
								</div>
								<div class="col-12"><textarea placeholder="Your Words"></textarea></div>
							</div>
							<button class="theme-button-one">Submit</button>
						</form>
			    	</div> <!-- End of .appoinment_form_wrapper -->
			    </div> <!-- End of .modal-content -->
			  </div> <!-- End of .modal-dialog -->
			</div> <!-- End of #schedule-box -->



		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{asset('assets/frontends/vendor/jquery.2.2.3.min.js')}}"></script>
		<!-- Popper js -->
		<script src="{{asset('assets/frontends/vendor/popper.js/popper.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('assets/frontends/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<!-- Style-switcher  -->
		<script src="{{asset('assets/frontends/vendor/jQuery.style.switcher.min.js')}}"></script>
		<!-- Camera Slider -->
		<script src="{{asset('assets/frontends/vendor/Camera-master/scripts/jquery.mobile.customized.min.js')}}"></script>
	    <script src="{{asset('assets/frontends/vendor/Camera-master/scripts/jquery.easing.1.3.js')}}"></script>
	    <script src="{{asset('assets/frontends/vendor/Camera-master/scripts/camera.min.js')}}"></script>
	    <!-- menu  -->
		<script src="{{asset('assets/frontends/vendor/menu/src/js/jquery.slimmenu.js')}}"></script>
		<!-- WOW js -->
		<script src="{{asset('assets/frontends/vendor/WOW-master/dist/wow.min.js')}}"></script>
		<!-- owl.carousel -->
		<script src="{{asset('assets/frontends/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
		<!-- js count to -->
		<script src="{{asset('assets/frontends/vendor/jquery.appear.js')}}"></script>
		<script src="{{asset('assets/frontends/vendor/jquery.countTo.js')}}"></script>
		<!-- Fancybox -->
		<script src="{{asset('assets/frontends/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
		<!-- Calendar js -->
		<script type="text/javascript" src="{{asset('assets/frontends/vendor/monthly-master/js/monthly.js')}}"></script>
		<!-- Time picker -->
		<script type="text/javascript" src="{{asset('assets/frontends/vendor/time-picker/jquery.timepicker.min.js')}}"></script>
		<!-- ui js -->
		<script type="text/javascript" src="{{asset('assets/frontends/vendor/jquery-ui/jquery-ui.min.js')}}"></script>

		<!-- Theme js -->
		<script src="{{asset('assets/frontends/js/theme.js')}}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
