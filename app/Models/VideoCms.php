<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCms extends Model
{
    use HasFactory;
    protected $fillable = [
        "title", "description", "youtube_link"
    ];
}
