<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppPropertie extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_id',
        'name',
        'desc',
        'locale_id',
    ];
}
