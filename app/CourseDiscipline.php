<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Course $course
 * @property Discipline $discipline
 * @property PreRequisite[] $preRequisites
 * @property PreRequisite[] $preRequisites
 * @property int $id
 * @property int $course_id
 * @property int $discipline_id
 * @property int $semester
 * @property string $nature
 * @property string $created_at
 * @property string $updated_at
 */
class CourseDiscipline extends Model
{
  /**
   * @var array
   */
  protected $fillable = ['course_id', 'discipline_id', 'semester', 'nature', 'created_at', 'updated_at'];

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
  public function discipline()
  {
    return $this->belongsTo('App\Discipline');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function preRequisites()
  {
    return $this->hasMany('App\PreRequisite', 'pre_discipline_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function preRequisites()
  {
    return $this->hasMany('App\PreRequisite', 'post_discipline_id');
  }
}
