<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Permission
 * 
 * @property int $id
 * @property string|null $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Role[] $roles
 *
 * @package App\Models\Base
 */
class Permission extends Model
{
	use SoftDeletes;
	protected $table = 'permissions';

	protected $fillable = [
		'title'
	];

	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}
}