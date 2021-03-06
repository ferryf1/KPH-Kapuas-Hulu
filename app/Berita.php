<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Berita extends Model
{
    protected $fillable = [
        'user_id', 'judul', 'isi',
        'foto'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
