<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_team',
        'no_team',
        'game',
    ];

    public function members() {
        return $this->hasMany(member::class, 'playing_for', 'id');
    }
}