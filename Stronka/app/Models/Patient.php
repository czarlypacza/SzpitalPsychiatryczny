<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Doctor;
use App\Models\Address;
use App\Models\Illness;
class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'age', 'phone_number', 'pesel', 'weight', 'height', 'doctor_id', 'address_id',];

    public function doctor():BelongsTo{
        return $this->belongsTo(Doctor::class);
    }

    public function address():BelongsTo{
        return $this->belongsTo(Address::class);
    }

    public function illnesses():BelongsToMany{
        return $this->belongsToMany(Illness::class);
    }

}
