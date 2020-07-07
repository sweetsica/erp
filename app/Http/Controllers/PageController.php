<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $data['info_contact'] = 'Cơ quan chủ quản: Tổng cục Môi trường Giấy phép số 153/GP-TTGT do Bộ Thông tin và Truyền thông cấp ngày 26 tháng 10 năm 2015 Người chịu trách nhiệm chính: TS. Nguyễn Văn Tài – Tổng cục trưởng Tổng cục Môi trường';
        $data['title'] = 'tieu de';
        return view('frontends.index',$data);
    }

    public function lanh_dao_tong_cuc()
    {
        return view('frontends.lanh_dao_tong_cuc');
    }

    public function lien_he()
    {
//        return view('frontends.lien_he');
    }

    public function chuc_nang_nhiem_vu()
    {
        return view('frontends.chuc_nang_nhiem_vu');
    }

    public function so_do_to_chuc()
    {
        return view('frontends.so_do_to_chuc');
    }

    public function cac_don_vi_truc_thuoc()
    {
        return view('frontends.cac_don_vi_truc_thuoc');
    }

    public function nghi_quyet_chi_thi()
    {
        return view('frontends.nghi_quyet_chi_thi');
    }

    public function chien_luoc_quy_hoach()
    {
        return view('frontends.chien_luoc_quy_hoach');
    }

    public function van_ban_quy_pham_phap_luat()
    {
        return view('frontends.van_ban_quy_pham_phap_luat');
    }

    public function dieu_uoc_quoc_te()
    {
        return view('frontends.dieu_uoc_quoc_te');
    }

    public function chuong_trinh_de_an_du_an()
    {
        return view('frontends.chuong_trinh_de_an_du_an');
    }

    public function danh_gia_tac_dong_moi_truong()
    {
        return view('frontends.danh_gia_tac_dong_moi_truong');
    }

    public function giay_phep_moi_truong()
    {
        return view('frontends.giay_phep_moi_truong');
    }

    public function giam_sat_thanh_tra_kiem_tra()
    {
        return view('frontends.giam_sat_thanh_tra_kiem_tra');
    }

    public function quan_trac_moi_truong()
    {
        return view('frontends.quan_trac_moi_truong');
    }

    public function truyen_thong_nang_cao_nhan_thuc()
    {
        return view('frontends.truyen_thong_nang_cao_nhan_thuc');
    }

    public function thong_tin_du_lieu_bao_cao_moi_truong()
    {
        return view('frontends.thong_tin_du_lieu_bao_cao_moi_truong');
    }

    public function khoa_hoc_cong_nghe_va_hop_tac_quoc_te()
    {
        return view('frontends.khoa_hoc_cong_nghe_va_hop_tac_quoc_te');
    }

    public function Luat()
    {
        return view('frontends.Luat');
    }

    public function Nghi_dinh()
    {
        return view('frontends.Nghi_dinh');
    }

    public function Thong_tu()
    {
        return view('frontends.Thong_tu');
    }

    public function Quy_chuan()
    {
        return view('frontends.Quy_chuan');
    }

    public function Van_ban_khac()
    {
        return view('frontends.Van_ban_khac');
    }

    public function moitruong()
    {
        return view('frontends.ems.report_ems');
    }

    public function moitruong_test()
    {
        return view('frontends.ems.report_ems_dark');
    }

    public function tin_tuc_moi_truong(){
        return view('frontends.tin-tuc-moi-truong');
    }
}
