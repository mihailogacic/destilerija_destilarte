<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    use HasFactory;

    public function dogadjaj(){
        return $this->belongsTo(Dogadjaj::class);
    }
    public function korisnik(){
        return $this->belongsTo(Korisnik::class);
    }
}
