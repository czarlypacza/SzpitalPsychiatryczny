<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Illness extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name','description'];

    public function patients():BelongsToMany{
        return $this->belongsToMany(Patient::class);
    }

}
