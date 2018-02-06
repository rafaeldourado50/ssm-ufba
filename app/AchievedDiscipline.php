<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class AchievedDiscipline extends Model
{
  /**
   * @var array
   */
  protected $fillable = ['discipline_id', 'student_id'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function discipline()
  {
    return $this->belongsTo('App\Discipline');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function student()
  {
    return $this->belongsTo('App\Student');
  }
}
