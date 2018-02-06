<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
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
