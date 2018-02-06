<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\Permission\Contracts\Role as RoleContract;
use Spatie\Permission\Exceptions\RoleDoesNotExist;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\RefreshesPermissionCache;

/**
 *
 */
class Role extends Model implements RoleContract
{
    use HasPermissions;
    use RefreshesPermissionCache;

  /**
   * The attributes that aren't mass assignable.
   *
   * @var array
   */
  public $guarded = ['id'];

  /**
   * Create a new Eloquent model instance.
   *
   * @param array $attributes
   */
  public function __construct(array $attributes = [])
  {
    parent::__construct($attributes);
  }

  /**
   * A role may be given various permissions.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function permissions()
  {
    return $this->belongsToMany('App\Permission', 'role_permissions');
  }

  /**
   * A role may be assigned to various users.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function users()
  {
    return $this->belongsToMany('App\User', 'user_roles');
  }

  /**
   * Find a role by its name.
   *
   * @param string $name
   *
   * @return Role
   *
   * @throws RoleDoesNotExist
   */
  public static function findByName($name)
  {
    $role = static::where('name', $name)->first();

    if (!$role) {
      throw new RoleDoesNotExist();
    }

    return $role;
  }

  /**
   * Determine if the user may perform the given permission.
   *
   * @param string|Permission $permission
   *
   * @return bool
   */
  public function hasPermissionTo($permission)
  {
    if (is_string($permission)) {
      $permission = app(Permission::class)->findByName($permission);
    }

    return $this->permissions->contains('id', $permission->id);
  }
}
