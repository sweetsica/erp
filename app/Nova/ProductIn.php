<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProductIn extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */

    public static $category = "2-QL Kho Hàng";
    public static $model = 'App\ProductIn';
    public static function label()
    {
        return 'Nhập hàng';
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
            Text::make('Mẫu số','type'),
            Text::make('Đơn vị bán','seller'),
            Number::make('Mã số thuế','tax'),
            Text::make('Địa chỉ','address'),
            Text::make('Người mua','buyer'),
            Select::make('Hình thức thanh toán')->options([
                'Chuyển khoản'=>'Chuyển khoản',
                'Tiền mặt'=>'Tiền mặt',
            ]),
            //tên mặt hàng

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
