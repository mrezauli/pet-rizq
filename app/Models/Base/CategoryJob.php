<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryJob
 * 
 * @property int $job_id
 * @property int $category_id
 * 
 * @property Category $category
 * @property Job $job
 *
 * @package App\Models\Base
 */
class CategoryJob extends Model
{
	protected $table = 'category_job';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'job_id' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'job_id',
		'category_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function job()
	{
		return $this->belongsTo(Job::class);
	}
}
