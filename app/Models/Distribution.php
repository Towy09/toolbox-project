<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;

    public function main()
    {
        return $this->hasMany('App\Models\Main', 'user_id');
    }
}
