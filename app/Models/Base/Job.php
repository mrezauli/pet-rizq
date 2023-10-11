<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Category;
use App\Models\Company;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
	use SoftDeletes;
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
}
