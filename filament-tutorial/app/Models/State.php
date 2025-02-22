<?php

namespace App\Models;

use App\Models\City;
use App\Models\Country;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country_id',
    ];

    public function country(): BelongsTo {
        return $this->belongsTo(Country::class);
    }

    public function employee(): HasMany {
        return $this->hasMany(Employee::class);
    }
   
}
