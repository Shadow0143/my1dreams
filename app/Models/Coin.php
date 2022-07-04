<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;
    protected $table = 'coins';

    public function usercoin()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
