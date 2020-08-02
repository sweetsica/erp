<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenralLedger extends Model
{
    protected $casts = [
        'from' => 'date',
        'to' => 'date',
        'created_at' => 'date',
        'updated_at' => 'date'
    ];
//    public function Income()
//    {
//        return $this->belongsToMany(Income::class);
//    }
    public function Income()
    {
        return $this->hasMany(Income::class);
    }
    public function Paid()
    {
        return $this->hasMany(Paid::class);
    }



}
