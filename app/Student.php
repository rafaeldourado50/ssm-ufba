<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Course $course
 * @property AchievedDiscipline[] $achievedDisciplines
 * @property int $id
 * @property int $course_id
 * @property string $name
 * @property string $password
 * @property string $email
 * @property int $enrollment
 * @property string $created_at
 * @property string $updated_at
 */
class Student extends Model
{
  /**
   * @var array
   */
  protected $fillable = ['course_id', 'name', 'password', 'email', 'enrollment', 'created_at', 'updated_at'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function course()
  {
    return $this->belongsTo('App\Course');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function achievedDisciplines()
  {
    return $this->hasMany('App\AchievedDiscipline');
  }
}
