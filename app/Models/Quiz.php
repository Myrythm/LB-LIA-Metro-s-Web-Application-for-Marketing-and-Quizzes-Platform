<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function options()
    {
        return $this->hasManyThrough(Option::class, Question::class);
    }
    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    protected $guarded = ['id'];
}
