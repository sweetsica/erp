<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paid extends Model
{
    protected $guarded=[''];

    public function GenralLedger()
    {
        return $this->BelongsTo(GenralLedger::class);
    }
}
