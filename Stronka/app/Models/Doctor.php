<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Patient;

class Doctor extends Model
{
    use HasFactory;



    protected $fillable = ['first_name', 'last_name', 'phone_number', 'specialization','ward_id'];

    public function ward():BelongsTo{
        return $this->belongsTo(Ward::class);
    }

    public function patients():HasMany{
        return $this->hasMany(Patient::class);
    }
}
