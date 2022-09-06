<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    protected $fillable = [
        'tahun_ajaran',
        'status_id', 
    ];

    protected $with = [
        'periodStatuses',
    ];

    public function periodStatuses(){
        return $this->belongsTo(PeriodStatus::class, 'status_id');
    }
}
