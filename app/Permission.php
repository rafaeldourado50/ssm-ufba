<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\Permission\Contracts\Permission as PermissionContract;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Spatie\Permission\Traits\RefreshesPermissionCache;

/**
 *
 */
class Permission extends Model implements PermissionContract
{
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
   * A permission can be applied to roles.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function roles()
  {
    return $this->belongsToMany('App\Role', 'role_permissions');
  }

  /**
   * A permission can be applied to users.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function users()
  {
    return $this->belongsToMany('App\User', 'user_permissions');
  }

  /**
   * Find a permission by its name.
   *
   * @param string $name
   *
   * @throws PermissionDoesNotExist
   */
  public static function findByName($name)
  {
    $permission = static::where('name', $name)->first();

    if (!$permission) {
      throw new PermissionDoesNotExist();
    }

    return $permission;
  }
}