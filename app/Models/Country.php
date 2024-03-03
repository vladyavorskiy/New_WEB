<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Country extends Model
{
    protected $guarded = [];

    use HasFactory;
    public function turnovers1():HasMany
    {
        return $this->hasMany(Turnover::class, 'country1_id');
    }

    public function turnovers2():HasMany
    {
        return $this->hasMany(Turnover::class, 'country2_id');
    }

    public function events():HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function economies():HasMany
    {
        return $this->hasMany(Economy::class);
    }
}
