<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Course $course
 * @property DisciplineClassOffer $disciplineClassOffer
 * @property int $id
 * @property int $course_id
 * @property int $discipline_class_offer_id
 * @property string $created_at
 * @property string $updated_at
 */
class CourseClassOffer extends Model
{
  /**
   * @var array
   */
  protected $fillable = ['course_id', 'discipline_class_offer_id'];

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
  public function disciplineClassOffer()
  {
    return $this->belongsTo('App\DisciplineClassOffer');
  }
}
