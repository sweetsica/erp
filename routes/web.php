<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('/','PageController@index')->name('home');

Route::get('lanh_dao_tong_cuc','PageController@lanh_dao_tong_cuc')->name('lanh_dao_tong_cuc');
Route::get('chuc_nang_nhiem_vu','PageController@chuc_nang_nhiem_vu')->name('chuc_nang_nhiem_vu');
Route::get('so_do_to_chuc','PageController@so_do_to_chuc')->name('so_do_to_chuc');
Route::get('cac_don_vi_truc_thuoc','PageController@cac_don_vi_truc_thuoc')->name('cac_don_vi_truc_thuoc');
Route::get('nghi_quyet_chi_thi','PageController@nghi_quyet_chi_thi')->name('nghi_quyet_chi_thi');
Route::get('chien_luoc_quy_hoach','PageController@chien_luoc_quy_hoach')->name('chien_luoc_quy_hoach');
Route::get('van_ban_quy_pham_phap_luat','PageController@van_ban_quy_pham_phap_luat')->name('van_ban_quy_pham_phap_luat');
Route::get('dieu_uoc_quoc_te','PageController@dieu_uoc_quoc_te')->name('dieu_uoc_quoc_te');
Route::get('chuong_trinh_de_an_du_an','PageController@chuong_trinh_de_an_du_an')->name('chuong_trinh_de_an_du_an');
Route::get('danh_gia_tac_dong_moi_truong','PageController@danh_gia_tac_dong_moi_truong')->name('danh_gia_tac_dong_moi_truong');
Route::get('giay_phep_moi_truong','PageController@giay_phep_moi_truong')->name('giay_phep_moi_truong');
Route::get('giam_sat_thanh_tra_kiem_tra','PageController@giam_sat_thanh_tra_kiem_tra')->name('giam_sat_thanh_tra_kiem_tra');
Route::get('quan_trac_moi_truong','PageController@quan_trac_moi_truong')->name('quan_trac_moi_truong');
Route::get('truyen_thong_nang_cao_nhan_thuc','PageController@truyen_thong_nang_cao_nhan_thuc')->name('truyen_thong_nang_cao_nhan_thuc');
Route::get('thong_tin_du_lieu_bao_cao_moi_truong','PageController@thong_tin_du_lieu_bao_cao_moi_truong')->name('thong_tin_du_lieu_bao_cao_moi_truong');
Route::get('khoa_hoc_cong_nghe_va_hop_tac_quoc_te','PageController@khoa_hoc_cong_nghe_va_hop_tac_quoc_te')->name('khoa_hoc_cong_nghe_va_hop_tac_quoc_te');

Route::get('Luat','PageController@Luat')->name('Luat');
Route::get('Nghi_dinh','PageController@Nghi_dinh')->name('Nghi_dinh');
Route::get('Thong_tu','PageController@Thong_tu')->name('Thong_tu');
Route::get('Quy_chuan','PageController@Quy_chuan')->name('Quy_chuan');
Route::get('Van_ban_khac','PageController@Van_ban_khac')->name('Van_ban_khac');

Route::get('tin_tuc_moi_truong','PostController@tin_tuc_moi_truong')->name('tin_tuc_moi_truong');
Route::get('/thong_so','PageController@moitruong_test')->name('moitruong_info');




Route::get('admin/contact-list','ContactUSController@index')->name('contact-list');

Route::get('admin/edit-contact-list','ContactUSController@edit')->name('edit-contact-list');

Route::post('admin/contact/{id}','ContactUSController@update')->name('contact.update');
Route::get('admin/contact/{id}','ContactUSController@destroy')->name('contact-destroy');
Route::get('lien_he','ContactUSController@create')->name('lien_he');
Route::post('/guilienhe','ContactUSApi@store')->name('contactus.store');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/post','PostController')->except('destroy,show');
});
Route::get('post/{id}','PostController@destroy')->name('post.destroy');
Route::get('post/details/{id}','PostController@show')->name('post.show');
