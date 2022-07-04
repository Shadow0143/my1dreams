<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayGame extends Model
{
    use HasFactory;
    protected $table = 'play_games';

    public function userplaygame()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

}
