<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    // Userとの多対1のリレーションメソッドを定義
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
