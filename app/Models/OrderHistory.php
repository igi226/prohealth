<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "package_id",
        "amount",
        "end_date",
    ];

    // public function user(){
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }
    public function package(){
        return $this->belongsTo(Packages::class, 'package_id', 'id');
    }
}
