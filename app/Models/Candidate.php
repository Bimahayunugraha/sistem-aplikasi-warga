<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Candidate extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'candidates';
    protected $guarded = ['id'];
    protected $with = ['user'];

    protected $casts = [
        'start_date' => 'datetime:d-m-Y',
        'end_date' => 'datetime:d-m-Y',
    ];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function users() {
        return $this->hasOne(User::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function scopeFilter($query, array $filters) {
        $query->when ($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%');
        });

        $query->when($filters['user'] ?? false, fn($query, $user) =>
            $query->whereHas('user', fn($query) => 
                $query->where('username', $user)
            )
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
