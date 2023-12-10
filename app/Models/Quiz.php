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

    protected $guarded = ['id'];
}
