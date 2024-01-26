<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Star extends Model
{
    use HasFactory;

    protected $fillable = [
        "vote"
    ];


    public function profile()
    {
        return $this->belongsToMany(Profile::class);
    }
}
