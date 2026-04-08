<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image'
    ];

    // accessor gambar
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
    
    public function user() {
    return $this->belongsTo(User::class);
}

public function service() {
    return $this->belongsTo(Service::class);
}
}