<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Turnover extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function country1():BelongsTo
    {
        return $this->belongsTo(Country::class, 'country1_id');
    }
    public function country2():BelongsTo
    {
        return $this->belongsTo(Country::class, 'country2_id');
    }

}
