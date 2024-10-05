<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Events\ChirpCreated;

class Chirp extends Model
{

    use HasFactory;

    protected $fillable = [
        'message',
    ];

    // for chirp dispatch events
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    // connection users to chirps
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
