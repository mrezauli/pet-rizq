<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryJob extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Get the category that owns the CategoryJob
     *
     * @psalm-return BelongsTo<Category>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the job that owns the CategoryJob
     *
     * @psalm-return BelongsTo<Job>
     */
    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
}
