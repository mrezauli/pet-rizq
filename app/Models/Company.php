<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'url'];

    /**
     * Get all of the jobs for the Company
     *
     * @psalm-return HasMany<Job>
     */
    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}