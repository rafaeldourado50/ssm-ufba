<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Area extends Model
{
  /**
   * @var array
   */
  protected $fillable = ['name', 'description', 'created_at', 'updated_at'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function courses()
  {
    return $this->hasMany('App\Course');
  }
}
