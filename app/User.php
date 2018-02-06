<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Spatie\Permission\Traits\HasRoles;

/**
 *
 */
class User extends Authenticatable
{
  use HasRoles;
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'email', 'password'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = ['password', 'remember_token'];
  
  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function student()
  {
    return $this->hasOne('App\Student');
  }
}
