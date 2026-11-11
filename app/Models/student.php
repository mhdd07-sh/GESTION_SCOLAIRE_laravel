<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $fillable = ['nom', 'prenom', 'email' , 'date_naissance'];
    function getFullNameAttribute()
    {
        return $this->nom . ' ' . $this->prenom;
    }
}
