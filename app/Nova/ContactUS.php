<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class ContactUS extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */

    public static $category = "0-Quản Lý Thông Tin";
    public static $model = 'App\ContactUS';
    public static function label()
    {
        return 'Yêu cầu';
    }
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Tên người gửi','name'),
            Text::make('Số điện thoại','phone'),
            Text::make('Nội dung','content'),
            Select::make('Danh mục','cate')->options([
                'Cấp, cấp lại sổ  đăng ký chủ nguồn thải chất thải nguy hại'=>'Cấp, cấp lại sổ đăng ký chủ nguồn thải chất thải nguy hại',
                'Thẩm định, phê duyệt phương án cải tạo, phục hồi môi trường đối với hoạt động khai thác khoáng sản'=>'Thẩm định, phê duyệt phương án cải tạo, phục hồi môi trường đối với hoạt động khai thác khoáng sản',
                'Cấp, cấp lại sổ đăng ký chủ nguồn thải chất thải nguy hại'=>'Cấp, cấp lại sổ đăng ký chủ nguồn thải chất thải nguy hại',
                'Kiểm tra, xác nhận hoàn thành từng phần phương án/phương án bổ sung cải tạo phục hồi môi trường trong hoạt động khai thác khoáng sản'=>'Kiểm tra, xác nhận hoàn thành từng phần phương án/phương án bổ sung cải tạo phục hồi môi trường trong hoạt động khai thác khoáng sản',
                'Cấp, cấp lại Giấy xác nhận đủ điều kiện vệ bảo vệ môi trường trong nhập khẩu phế liệu làm nguyên liệu sản xuất'=>'Cấp, cấp lại Giấy xác nhận đủ điều kiện vệ bảo vệ môi trường trong nhập khẩu phế liệu làm nguyên liệu sản xuất',
                'Cấp giấy chứng nhận đủ điều kiện nhập khẩu phế liệu'=>'Cấp giấy chứng nhận đủ điều kiện nhập khẩu phế liệu'
            ]),
//            Boolean::make('Trạng thái','status'),
            Select::make('Trạng thái','status')->options([
                'Đã tiếp nhận'=>'Đã tiếp nhận',
                'Đang xử lý'=>'Đang xử lý',
                'Đã xử lý'=>'Đã xử lý'
            ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
