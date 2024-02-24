<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Garden extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'number',
    ];

    public function features():BelongsToMany
    {
        return $this->belongsToMany(Feature::class, FeatureGarden::class);
    }
}
