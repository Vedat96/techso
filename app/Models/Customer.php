<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // protected $table = 'consumables';

    protected $fillable = [
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'email',
        'telefoon',
        'adres',
        'plaats',
        'postcode',
    ];
    use HasFactory;
}
