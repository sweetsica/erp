<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ajhaupt7\ImageUploadPreview\ImageUploadPreview;
use Froala\NovaFroalaField\Froala;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */

    public static $category = "0-Quản lý thông tin";
    public static $model = 'App\Post';
    public static function label()
    {
        return 'Tin tức';
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
            Text::make('Title'),
            ImageUploadPreview::make('Image')->disk('public')->path('post_images'),
            Froala::make('Content'),
            DateTime::make('Publish Post At','created_at')->hideFromIndex(), //published_at
            DateTime::make('Publish Until','updated_at')->hideFromIndex(),
//            BelongsTo::make('Tác giả','User',User::class)->size('w-1/3')->rules('required'),
            Select::make('Category','cate')->options([
                'tintrongnuoc' => 'Tin Trong Nước',
                'tinquocte'     => 'Tin Quốc Tế'
            ]),
            Boolean::make('Status'),
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
