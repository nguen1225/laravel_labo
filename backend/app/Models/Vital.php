<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'height',
        'body_weight',
        'heart_rate',
        'min_blood_pressure',
        'max_blood_pressure',
        'registered_at'
    ];

//    日付フォーマットを変換する
    protected $dates = ['registered_at'];
}
