<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'title',
        'location',
        'email',
        'website',
        'tags',
        'logo',
        'description',
    ];

    public function scopeFilter(Builder $query, array $scopeParams): void
    {
        if (isset($scopeParams['tag'])) {
            $query->where('tags', 'like', '%'.$scopeParams['tag'].'%');
        }
        if (isset($scopeParams['search'])) {
            $query->where(function ($query) use ($scopeParams) {
                $query->where('title', 'like', '%'.$scopeParams['search'].'%')
                    ->orWhere('tags', 'like', '%'.$scopeParams['search'].'%')
                    ->orWhere('description', 'like', '%'.$scopeParams['search'].'%');
            });
        }
    }
}
