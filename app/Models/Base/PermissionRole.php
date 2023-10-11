<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PermissionRole
 * 
 * @property int $role_id
 * @property int $permission_id
 * 
 * @property Permission $permission
 * @property Role $role
 *
 * @package App\Models\Base
 */
class PermissionRole extends Model
{
	protected $table = 'permission_role';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int',
		'permission_id' => 'int'
	];

	protected $fillable = [
		'role_id',
		'permission_id'
	];

	public function permission()
	{
		return $this->belongsTo(Permission::class);
	}

	public function role()
	{
		return $this->belongsTo(Role::class);
	}
}
