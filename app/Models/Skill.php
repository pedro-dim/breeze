<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;


    public $timestamps = false;

    protected $fillable = ['skill'];




    public function getUsers()
    {
        return $this->belongsToMany(User::class);
    }
}
