@extends('frontends.template-part.master')
@section('content-homepage')

			<div class="news-classic news-details section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-12">
							<div class="single-classic-news">
								<div class="title clearfix">
									<div class="date">May 29, 2018</div>
									<h2 style="padding-top: 8%">{{$post->title}}</h2>
								</div> <!-- /.title -->
								<div class="image-box"><img src="images/blog/12.jpg" alt=""></div>
								<ul class="post-tag-meta clearfix">
									<li>by <a href="#">Admin</a></li>
									<li><a href="#">Tin tức môi trường</a></li>
									<li><a href="#">0 bình luận</a></li>
								</ul> <!-- /.post-tag-meta -->
								<p class="upper-text">{!! $post->content !!}</p>

							<div class="share-option clearfix">
								<div class="share float-left"><i class="fa fa-share-alt" aria-hidden="true"></i> Chia sẻ bài viết này</div>
								<ul class="social-icon float-right">
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.share-option -->

							<div class="comment-section">
								<h4 class="inner-section-title">0 Bình luận</h4>
{{--								@foreach ($comments as $comment)--}}
{{--									<div class="single-comment clearfix">--}}
{{--										<div class="author">--}}
{{--											<img src="images/blog/31.jpg" alt="">--}}
{{--											<h6>Nicole Burke</h6>--}}
{{--											<div class="date">29 May , 2018</div>--}}
{{--										</div> <!-- /.author -->--}}
{{--										<div class="comment">--}}
{{--											<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from Brady who was busy with three boys of his own. It’s time to play the digital divide with additional t’s time to light the lights. Before any of the tech jargon, design chops, or programming skills related.</p>--}}
{{--											<ul class="social-icon">--}}
{{--												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
{{--												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--												<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>--}}
{{--												<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>--}}
{{--											</ul>--}}
{{--											<a href="#" class="theme-button-one">Reply Now</a>--}}
{{--										</div> <!-- /.comment -->--}}
{{--									</div> <!-- /.single-comment -->--}}
{{--								@endforeach--}}
							</div> <!-- /.comment-section -->

							<div class="comment-reply-form">
								<h4 class="inner-section-title">Để lại bình luận</h4>

								<form action="#" class="theme-form-one">
									<div class="row">
										<div class="col-md-6 order-md-last">
											<input type="email" placeholder="Email">
											<textarea placeholder="Nhập nội dung..."></textarea>
										</div>
										<div class="col-md-6 order-md-first">
											<input type="text" placeholder="Tên">
											<input type="text" placeholder="Số điện thoại">
											<input type="text" placeholder="Tiêu đề">
											<button class="theme-button-one">Đăng bình luận</button>
										</div>
									</div>
								</form>
							</div> <!-- /.comment-reply-form -->
						</div> <!-- /.col- -->

						</div>
						<!-- ===================== Theme Sidebar ====================== -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-12 theme-sidebar">
{{--							<div class="sidebar-search sidebar-spacing">--}}
{{--								<h5 class="sidebar-title">Tìm kiếm</h5>--}}
{{--								<form action="#">--}}
{{--									<input type="text" placeholder="Search">--}}
{{--									<button><i class="flaticon-search"></i></button>--}}
{{--								</form>--}}
{{--							</div> <!-- /.sidebar-search -->--}}

							<div class="sidebar-author sidebar-spacing">
								<img src="{{asset('assets/images/post/8717823_n.jpg')}}" alt="">
								<h6>Bảo Bảo </h6>
								<p>Xây dựng & phát triển</p>
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.sidebar-author -->

							<div class="sidebar-categories sidebar-spacing">
								<h5 class="sidebar-title">Đề mục</h5>
								<ul>
									<li><a href="#">Tin tức môi trường</a></li>
									<li><a href="#">Hoạt động tiêu biểu</a></li>
									<li><a href="#">Tài liệu</a></li>
									<li><a href="#">Liên hệ</a></li>
								</ul>
							</div> <!-- /.sidebar-categories -->

							<div class="sidebar-contact-banner sidebar-spacing">
								<h6>Đề xuất góp ý!</h6>
								<p>Bạn muốn đóng góp thêm các thông tin, bài viết.</p>
								<a href="{{route('lien_he')}}" class="theme-button-one"><i class="fa fa-phone-square" aria-hidden="true"></i> Liên hệ ngay</a>
							</div> <!-- /.sidebar-contact-banner -->

							<div class="sidebar-latest-news sidebar-spacing">
								<h5 class="sidebar-title">Tin mới nhất</h5>
								@foreach($lastest_post as $last_post)
									<div class="single-latest-news">
										<a href="{{route('post.show',$last_post->id)}}" class="news-title">{{$last_post->title}}</a>
										<div class="img-box">
											<img src="images/blog/6.jpg" alt="">
											<div class="overlay">
												<a href="{{route('post.show',$last_post->id)}}">Xem thêm</a>
											</div> <!-- /.overlay -->
										</div> <!-- /.img-box -->
										<ul class="clearfix">
											<li class="float-left">May <span>29</span> , 2020</li>
											<li class="float-right"><span>00</span> Bình luận</li>
										</ul>
									</div> <!-- /.single-latest-news -->
								@endforeach
							</div> <!-- /.sidebar-latest-news -->


{{--							<div class="sidebar-gallery sidebar-spacing">--}}
{{--								<h5 class="sidebar-title">Thư viện ảnh</h5>--}}
{{--								<ul class="clearfix">--}}
{{--									@foreach($lastest_post as $last_post)--}}
{{--										<li><a href="#"><img src="{{asset('aĐề xuất góp ý!
ssets/images/post/'.$last_post->image)}}" alt=""></a></li>--}}
{{--									@endforeach--}}
{{--								</ul>--}}
{{--							</div> <!-- /.sidebar-gallery -->--}}

{{--							<div class="sidebar-text sidebar-spacing">--}}
{{--								<h5 class="sidebar-title">Text widget</h5>--}}
{{--								<b>Before any of the tech jargon, design chops, or programming skills related to making a website come into play, your site has to take shape as a solid idea. </b>--}}
{{--								<p>Having a clear understanding of your site’s mission will help inform your design, content, and structural.</p>--}}
{{--							</div> <!-- /.sidebar-text -->--}}

{{--							<div class="sidebar-text sidebar-spacing">--}}
{{--								<h5 class="sidebar-title">Text widget</h5>--}}
{{--								<ul>--}}
{{--									<li><a href="#">Log in</a></li>--}}
{{--									<li><a href="#">Entries <span>RSS</span></a></li>--}}
{{--									<li><a href="#">Comments <span>RSS</span></a></li>--}}
{{--									<li><a href="#">WordPress.org</a></li>--}}
{{--								</ul>--}}
{{--							</div> <!-- /.sidebar-text -->--}}
						</div> <!-- /.theme-sidebar -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.our-portfolio -->

@endsection
