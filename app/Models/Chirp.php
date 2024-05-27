<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// UserとChirpの関係を定義
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];


    // UserとChirpの関係を定義（hasManyの逆）
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
