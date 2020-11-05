<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_member',
        'no_member',
        'role',  
        'playing_for',
    ];

    public function team() {
        return $this->belongsTo(Team::class, 'playing_for', 'id');
    }
}
