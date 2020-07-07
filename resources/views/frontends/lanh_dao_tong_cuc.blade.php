@extends('frontends.template-part.master')	
@section('content-homepage')
<div class="theme-inner-banner section-spacing" style="background: url({{asset('assets/frontends/images/Edit/veanoibo03.png')}}) no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">Lãnh Đạo Tổng Cục Môi Trường</h2>
						<ul>
							<li><a href="index.html">Trang Chủ</a></li>
							<li>-</li>
							<li><a href="#">Giới Thiệu</a></li>
							<li>-</li>
							<li>Lãnh Đạo Tổng Cục</li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
			
			


			<!--
			=====================================================
				Our Portfolio
			=====================================================
			-->
			<div class="our-portfolio portfolio-three-column section-spacing">
				<div class="container">
					<div class="row">
						<div class="offset-lg-4 col-lg-4 col-sm-6 col-12">
							<div class="single-block">
								<img src="{{asset('assets/frontends/images/Edit/NguyenVanTai.jpg')}}" alt="">
								<div class="overlay">
									<div>
										<a href="images/portfolio/22.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"></a>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
				<div class="our-portfolio portfolio-three-column section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-6 col-12">
							<div class="single-block">
								<img src="{{asset('assets/frontends/images/Edit/NguyenHungThinh.jpg')}}" alt="">
								<div class="overlay">
									<div>
										<a href="images/portfolio/23.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"></a>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-4 col-sm-6 col-12">
							<div class="single-block">
								<img src="{{asset('assets/frontends/images/Edit/HoangVanThuc.jpg')}}" alt="">
								<div class="overlay">
									<div>
										<a href="images/portfolio/24.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"></a>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-4 col-sm-6 col-12">
							<div class="single-block">
								<img src="{{asset('assets/frontends/images/Edit/NguyenThuongHien.jpg')}}" alt="" style="margin-top: 44px">
								<div class="overlay">
									<div>
										<a href="images/portfolio/25.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"></a>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.our-portfolio -->
@endsection