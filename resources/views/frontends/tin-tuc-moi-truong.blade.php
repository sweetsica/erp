@extends('frontends.template-part.master')
@section('content-homepage')
    <div class="theme-inner-banner section-spacing" style="background: url({{asset('assets/frontends/images/Edit/veanoibo03.png')}})  no-repeat center; background-size:cover;">

        <div class="overlay">
            <div class="container">
                <h2 class="title">Tin tức môi trường</h2>

            </div>
        </div>
        <!-- /.overlay -->
    </div>
    <div class="our-blog blog-inner-page section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="row">
                        @foreach($lists as $data)
                        <div class="col-md-6">
                            <div class="single-blog-meta">
                                <div class="img-box">
                                    <img src="{{asset('storage/'.$data->image)}}" alt="" height="275">
                                    <a href="#" class="date">{{date('d-m-Y', strtotime($data->created_at))}}</a>
                                </div>
                                <div class="text">
{{--                                    <ul class="post-info clearfix">--}}
{{--                                        <li>By <a href="#">Consultpro</a></li>--}}
{{--                                        <li><a href="#">11 Likes</a></li>--}}
{{--                                        <li><a href="#">0 comment</a></li>--}}
{{--                                    </ul>--}}
                                    <h6 class="title"><a href="{{route('post.show',$data->id)}}">{{$data->title}}</a></h6>
                                </div> <!-- /.text -->
                            </div> <!-- /.single-blog-meta -->
                        </div>
                        @endforeach
{{--                        <div class="col-md-6">--}}
{{--                            <div class="single-blog-meta">--}}
{{--                                <div class="img-box">--}}
{{--                                    <img src="{{asset('assets/frontends/images/blog/15.jpg')}}" alt="">--}}
{{--                                    <a href="#" class="date">25 May 2018</a>--}}
{{--                                </div>--}}
{{--                                <div class="text">--}}
{{--                                    <ul class="post-info clearfix">--}}
{{--                                        <li>By <a href="#">Consultpro</a></li>--}}
{{--                                        <li><a href="#">11 Likes</a></li>--}}
{{--                                        <li><a href="#">0 comment</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <h6 class="title"><a href="blog-details.html">Strategic and commercial approach with issues</a></h6>--}}
{{--                                </div> <!-- /.text -->--}}
{{--                            </div> <!-- /.single-blog-meta -->--}}
{{--                        </div>--}}

                    </div>

                    <div class="theme-pagination">
{{--                        <ul class="">--}}
{{--                            <li class="active"><a href="#">1</a></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
{{--                        </ul>--}}
                        {!!$lists->links();!!}
                    </div>
                </div>


                <!-- ===================== Theme Sidebar ====================== -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 theme-sidebar">
                    <div class="sidebar-search sidebar-spacing">
                        <h5 class="sidebar-title">Tìm kiếm</h5>
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div> <!-- /.sidebar-search -->

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
                        <a href="#" class="theme-button-one"><i class="fa fa-phone-square" aria-hidden="true"></i> Liên hệ ngay</a>
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
                    {{--										<li><a href="#"><img src="{{asset('assets/images/post/'.$last_post->image)}}" alt=""></a></li>--}}
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
                </div>  <!-- /.theme-sidebar -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.our-portfolio -->

@endsection
