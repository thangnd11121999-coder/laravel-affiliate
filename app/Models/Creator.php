<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'display_name',
        'email',
        'phone',
        'platform',
        'follower_count',
        'status',
        'notes',
    ];

    public function campaigns() {
        return $this->hasMany(Campaign::class);
    }
    
}
