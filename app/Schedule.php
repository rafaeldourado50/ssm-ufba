<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property DisciplineClass $disciplineClass
 * @property ProfessorSchedule[] $professorSchedules
 * @property int $id
 * @property int $discipline_class_id
 * @property int $day
 * @property int $start_hour
 * @property int $start_minute
 * @property int $end_hour
 * @property int $end_minute
 * @property int $first_class_number
 * @property int $class_count
 * @property string $created_at
 * @property string $updated_at
 */
class Schedule extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['discipline_class_id', 'day', 'start_hour', 'start_minute', 'end_hour', 'end_minute', 'first_class_number', 'class_count', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function disciplineClass()
    {
        return $this->belongsTo('App\DisciplineClass');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function professorSchedules()
    {
        return $this->hasMany('App\ProfessorSchedule');
    }
}
