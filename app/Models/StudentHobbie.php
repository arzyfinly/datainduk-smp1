<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentHobbie extends Model
{
    use HasFactory;

    protected $fillable = [  
        'kesenian',
        'kesehatan_jasmani',
        'keorganisasian',   
        'lain_lain',   
    ];
    protected $nullable = [  
        'kesenian',
        'kesehatan_jasmani',
        'keorganisasian',   
        'lain_lain',   
    ];
    
}
