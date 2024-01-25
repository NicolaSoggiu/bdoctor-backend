<?php

namespace App\Models;

use App\Models\User;
use App\Models\Sponsorship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserSponsorship extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sponsorship()
    {
        return $this->belongsTo(Sponsorship::class);
    }
}