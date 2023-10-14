<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|Job[] $jobs
 *
 * @package App\Models\Base
 */
class Category extends Model
{
	use SoftDeletes,HasFactory ;
	protected $table = 'categories';

	protected $fillable = [
		'name'
	];

	public function jobs()
	{
		return $this->belongsToMany(Job::class);
	}
}
