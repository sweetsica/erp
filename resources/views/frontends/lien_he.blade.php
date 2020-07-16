@extends('frontends.template-part.master')
@section('content-homepage')
			<section id="contact">

  <h1 class="section-header">Thông tin liên hệ</h1>
              @if(Session::has('message'))
                <div class="alert alert-success" style="text-align: center;">
                  {{Session::get('message')}}
                </div>
              @endif
  <div class="contact-wrapper row">

      <!----------------

      CONTACT PAGE LEFT

      ----------------->

    <form class="form-horizontal col-sm-6" role="form" method="POST" action="{{route('contactus.store')}}" data-parsley-validate>

      <input type="hidden" name="_method" value="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" required placeholder="Họ và tên" name="name" value="">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="phone" required placeholder="Số điện thoại" name="phone" value="">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <select class="form-control" id="title" name="cate" required>
            <option disabled selected>-- Chọn một mục --</option>
            <option value="Cấp, cấp lại sổ  đăng ký chủ nguồn thải chất thải nguy hại">Cấp, cấp lại sổ đăng ký chủ nguồn thải chất thải nguy hại</option>
            <option value="Thẩm định, phê duyệt phương án cải tạo, phục hồi môi trường đối với hoạt động khai thác khoáng sản">Thẩm định, phê duyệt phương án cải tạo, phục hồi môi trường đối với hoạt động khai thác khoáng sản</option>
            <option value="Cấp, cấp lại sổ đăng ký chủ nguồn thải chất thải nguy hại">Cấp, cấp lại sổ đăng ký chủ nguồn thải chất thải nguy hại</option>
            <option value="Kiểm tra, xác nhận hoàn thành từng phần phương án/phương án bổ sung cải tạo phục hồi môi trường trong hoạt động khai thác khoáng sản">Kiểm tra, xác nhận hoàn thành từng phần phương án/phương án bổ sung cải tạo phục hồi môi trường trong hoạt động khai thác khoáng sản</option>
            <option value="Cấp, cấp lại Giấy xác nhận đủ điều kiện vệ bảo vệ môi trường trong nhập khẩu phế liệu làm nguyên liệu sản xuất">Cấp, cấp lại Giấy xác nhận đủ điều kiện vệ bảo vệ môi trường trong nhập khẩu phế liệu làm nguyên liệu sản xuất</option>
            <option value="Cấp giấy chứng nhận đủ điều kiện nhập khẩu phế liệu">Cấp giấy chứng nhận đủ điều kiện nhập khẩu phế liệu</option>
            <option value="Vấn đề khác">Vấn đề khác</option>
          </select>
{{--          <input type="text" class="form-control" id="title" placeholder="Hạng mục" name="title" value="">--}}
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <textarea class="form-control" rows="5" placeholder="Nội dung" name="content" required></textarea>
        </div>
      </div>
        <input type="text" name="status" value="Đang chờ" hidden>
      <div class="form-group">
        <div class="col-sm-12">
          	<button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
	        	<div class="button">
	          		<i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
	        	</div>
      		</button>
        </div>
      </div>


    </form>

      <!----------------

      CONTACT PAGE RIGHT

      ----------------->

      <div class="direct-contact-container col-sm-5 offset-sm-1">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Số 10, Tôn Thất Thuyết, Phường Mỹ Đình, Quận Nam Từ Liêm | Hà Nội</span></i></li>

          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(024) 38223189</a></span></i></li>

          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">veaportal@vea.gov.vn</a></span></i></li>

        </ul>

        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
        </ul>
        <hr>

        <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>

      </div>

  </div>

</section>


@endsection
