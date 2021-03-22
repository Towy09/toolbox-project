<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'user_id');
    }

    public function cleaning()
    {
        return $this->belongsTo('App\Models\Cleaning', 'user_id');
    }

    public function distribution()
    {
        return $this->belongsTo('App\Models\Distribution', 'user_id');
    }

    public function interaction()
    {
        return $this->belongsTo('App\Models\Interaction', 'user_id');
    }

    public function strategy()
    {
        return $this->belongsTo('App\Models\Strategy', 'user_id');
    }
}
