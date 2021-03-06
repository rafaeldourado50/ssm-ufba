<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Discipline extends Model
{
  /**
   * @var array
   */
  protected $fillable = ['code', 'name', 'curriculum', 'load', 'created_at', 'updated_at'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function achievedDisciplines()
  {
    return $this->hasMany('App\AchievedDiscipline');
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
  public function disciplineClasses()
  {
    return $this->hasMany('App\DisciplineClass');
  }
}
