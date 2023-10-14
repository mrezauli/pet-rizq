<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use App\Models\Age;
use App\Models\Salary;
use App\Models\Company;
use App\Models\Category;
use App\Models\Location;
use App\Models\Designation;
use App\Models\Experience;
use App\Models\Qualification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Job
 *
 * @property int $id
 * @property string $title
 * @property string|null $short_description
 * @property string|null $full_description
 * @property string|null $requirements
 * @property string|null $job_nature
 * @property string|null $address
 * @property bool|null $top_rated
 * @property string $salary
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int $location_id
 * @property int $company_id
 *
 * @property Company $company
 * @property Location $location
 * @property Collection|Category[] $categories
 *
 * @package App\Models\Base
 */
class Job extends Model
{
    use SoftDeletes, HasFactory;
    protected $table = 'jobs';

    protected $casts = [
        'top_rated' => 'bool',
        'location_id' => 'int',
        'company_id' => 'int'
    ];

    protected $fillable = [
        'title',
        'short_description',
        'full_description',
        'requirements',
        'job_nature',
        'address',
        'top_rated',
        'salary',
        'location_id',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    /**
     * Get the designation that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function designation(): BelongsTo
    {
        return $this->belongsTo(Designation::class);
    }

    /**
     * Get the salary that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salary(): BelongsTo
    {
        return $this->belongsTo(Salary::class);
    }

    /**
     * Get the age that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function age(): BelongsTo
    {
        return $this->belongsTo(Age::class);
    }

    /**
     * Get the qualification that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function qualification(): BelongsTo
    {
        return $this->belongsTo(Qualification::class);
    }

    /**
     * Get the experience that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function experience(): BelongsTo
    {
        return $this->belongsTo(Experience::class);
    }
}