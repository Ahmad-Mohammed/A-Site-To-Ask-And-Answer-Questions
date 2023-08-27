<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    use HasFactory;
    protected  $guarded=[];

    public function question()
    {
        return $this->belongsTo(question::class);
    }
    public function auther()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
