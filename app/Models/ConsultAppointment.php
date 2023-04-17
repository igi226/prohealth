<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultAppointment extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "consultation_id",
        "status",
        "message",
        
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function consultations() {
        return $this->belongsTo(Consultation::class, 'consultation_id', 'id');
    }
}
