<?php

namespace App\Nova;

use App\Nova\Metrics\PostCount;
use Froala\NovaFroalaField\Froala;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ctessier\NovaAdvancedImageField\AdvancedImage;



class PostResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Post';
    public static $category = "0-QL Thông Tin";
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
            AdvancedImage::make('image')->croppable(),
            Froala::make('Content'),
//            Trix::make('Content'),
            DateTime::make('Publish Post At','created_at')->hideFromIndex(), //published_at
            DateTime::make('Publish Until','updated_at')->hideFromIndex()->hideWhenCreating(),
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
        return [
            new PostCount,
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
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
