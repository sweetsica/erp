<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $guarded=[''];
    public function GenralLedger()
    {
        return $this->BelongsTo(GenralLedger::class);
//        return $this->BelongsTo(GenralLedger::class,'','');
    }
}
