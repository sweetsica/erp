<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Actions\Actionable;

class ProductTotal extends Model
{
    use Actionable,Notifiable;
    protected $guarded=[''];

}
