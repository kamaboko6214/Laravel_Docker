<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    protected $table = 'travels';
    
    public function overviews() {
        return $this->hasmany('App\Models\Overview');
    }

    public function plans() {
        return $this->hasmany('App\Models\Plan');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
