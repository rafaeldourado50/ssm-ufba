<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Student extends Model
{
  /**
   * @var array
   */
  protected $fillable = [ 'enrollment', 'course_id', 'user_id', 'created_at', 'updated_at'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function course()
  {
    return $this->belongsTo('App\Course');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function achievedDisciplines()
  {
    return $this->hasMany('App\AchievedDiscipline');
  }
}
