<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ward extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['ward_name'];

    public function doctors():HasMany{
        return  $this->hasMany(Doctor::class);
    }
}
