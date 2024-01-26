<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sponsorship extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "price",
        "duration"
    ];


    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
