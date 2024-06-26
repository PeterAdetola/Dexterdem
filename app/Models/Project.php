<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function images()
    {
        return $this->hasMany(ProjectImgs::class);
    }

    public function cat(){
        return $this->belongsTo(Service::class,'category', 'id');
    }
}
