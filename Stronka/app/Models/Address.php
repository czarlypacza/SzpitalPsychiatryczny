<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Patient;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['voivodeship','city', 'street', 'house_number', 'flat_number','postal_code'];

    public function patient():HasMany{
        return $this->hasMany(Patient::class);
    }

}
