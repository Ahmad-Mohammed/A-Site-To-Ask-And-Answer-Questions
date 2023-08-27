<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
   protected $guarded=[];
    use HasFactory;

    public function getRouteKeyName(){
        return 'slug';
     }

    public function answers()
    {
        return $this->hasMany(answer::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function auther()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
