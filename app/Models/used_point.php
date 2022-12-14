<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class used_point extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'point'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
