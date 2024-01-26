<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Typology extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];


    public function profile()
    {
        return $this->belongsToMany(Profile::class);
    }
}
