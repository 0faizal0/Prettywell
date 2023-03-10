<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAcne extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image_path',
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
