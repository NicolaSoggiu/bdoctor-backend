<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        "profile_id",
        "name",
        "lastname",
        "email",
        "text",
    ]


    public function profile() {
        return $this->hasMany(Profile::class)
    }
}