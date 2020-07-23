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

    public function Paid()
    {
        return $this->belongsToMany(Paid::class);
    }

}
