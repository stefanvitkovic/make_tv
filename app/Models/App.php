<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $fillable = [
        'short_name',
        'uid',
    ];

    public function properties()
    {
        return $this->hasMany(AppPropertie::class);
    }

    public function translated_name($locale)
    {
        return $this->hasMany(AppPropertie::class)->where('locale_id',$locale)->first()->name;
    }

    public function translated_desc($locale)
    {
        return $this->hasMany(AppPropertie::class)->where('locale_id',$locale)->first()->desc;
    }
    

}
