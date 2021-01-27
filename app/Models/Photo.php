<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'is_private',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
