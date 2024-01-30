<?php

namespace App\Models;

use App\Models\Profile;
use App\Models\Typology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfileTypology extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Profile::class);
    }

    public function sponsorship()
    {
        return $this->belongsTo(Typology::class);
    }
}
