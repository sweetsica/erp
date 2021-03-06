<?php

namespace App\Nova;


use App\Nova\Metrics\IncomeTrend;
use App\Nova\Metrics\PaidTrend;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;



class GenralLedger extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $category = "1-Kế toán tài chính";
    public static $model = 'App\GenralLedger';
    public static function label()
    {
        return 'Sổ cái';
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'license';

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
            Text::make('Số hiệu','license'),
            Date::make('Từ ngày','from'),
            Date::make('Tới ngày','to'),
            Number::make('Số tài khoản','account_number'),
            Trix::make('Diễn giải','content')->hideFromIndex()  ,
            Number::make('Số TK đối ứng','reciprocal_number')->hideFromIndex(),
            Number::make('Nợ phát sinh','debt_number')->hideFromIndex(),
            Number::make('Khả dụng','available_number')->hideFromIndex(),
            Date::make('Ngày tạo','created_at')->hideFromIndex(), //published_at
            Date::make('Chỉnh sửa lần cuối','updated_at')->hideFromIndex(),

//            BelongsToMany::make('Phiếu thu','Income',Income::class),
            hasMany::make('Phiếu thu','Income',Income::class),
            hasMany::make('Phiếu chi','Paid',Paid::class),
            
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
        return [
            new IncomeTrend,
            new PaidTrend,
        ];
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
     * @param  \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            new DownloadExcel,
        ];
    }



}
