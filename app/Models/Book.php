<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [

        'name', 'title', 'author', 'user_id', 'cover_img', 'description'


    ];

    public function getUser()
    {

        return $this->belongsTo(User::class, 'user_id');
    }
}
