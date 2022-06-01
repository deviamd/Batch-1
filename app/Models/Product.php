<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $guard = ['id'];

    protected $fillable = [
        'name',
        'email',
        'password',
        'photo_profile',
        'status',
    ];

    public function merchant() {
        return $this->belongsTo(Merchant::class);
    }
}
