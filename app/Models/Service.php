<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function projects()
    {
        // return $this->hasMany(Project::class, 'service_id', 'id');
        return $this->hasMany(Project::class, 'category', 'id');
    }

    public function scopeWithProjects($query)
    {
        return $query->has('projects');
    }
}
