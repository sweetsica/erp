<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HRManage extends Model
{
    protected $guarded = [''];
    protected $casts = [
        'dateofbirth' => 'date'
    ];
    public function phongban()
    {
        return $this->belongsTo(DepartmentManage::class);
    }
}
