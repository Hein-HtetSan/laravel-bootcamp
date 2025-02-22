<?php

namespace App\Models;

use App\Models\State;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'phonecode',
    ];

    public function states(): HasMany {
        return $this->hasMany(State::class);
    }

    public function employee(): HasMany {
        return $this->hasMany(Employee::class);
    }
}
