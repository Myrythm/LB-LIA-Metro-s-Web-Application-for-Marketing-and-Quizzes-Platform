<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }
}
