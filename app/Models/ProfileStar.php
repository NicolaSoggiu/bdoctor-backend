<?php

namespace App\Models;

use App\Models\Star;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfileStar extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function user()
    {
        return $this->belongsTo(Profile::class);
    }

    public function sponsorship()
    {
        return $this->belongsTo(Star::class);
    }
}
