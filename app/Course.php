<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property CourseClassOffer[] $courseClassOffers
 * @property CourseDiscipline[] $courseDisciplines
 * @property Student[] $students
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $curriculum
 * @property int $area_id
 * @property string $created_at
 * @property string $updated_at
 */
class Course extends Model
{
  /**
   * @var array
   */
  protected $fillable = ['name', 'code', 'curriculum', 'area_id', 'created_at', 'updated_at'];
    
  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function area()
  {
    return $this->belongsTo('App\Area');
  }
  
  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function courseClassOffers()
  {
    return $this->hasMany('App\CourseClassOffer');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function courseDisciplines()
  {
    return $this->hasMany('App\CourseDiscipline');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function students()
  {
    return $this->hasMany('App\Student');
  }
}
