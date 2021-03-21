<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotell extends Model
{
    use HasFactory;
    protected $fillable=[
        'NomHotel',
    'AdresseHotel',
    'SiteWebHotel',
    'PhotoHotel',
    'nbEtoiles'
    ];
}
