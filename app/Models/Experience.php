<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['requirements'];

    /**
     * Get all of the jobs for the Experience
     *
     * @psalm-return HasMany<Job>
     */
    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
