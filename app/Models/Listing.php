<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //CREATING MODEL:-php artisan make:model Listing
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'logo',
        'company',
        'location',
        'website',
        'email',
        'tags',
        'description'
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%')->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    //RELATION WITH USER
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}