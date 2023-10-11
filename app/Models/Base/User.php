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
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Role[] $roles
 *
 * @package App\Models\Base
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}
}
