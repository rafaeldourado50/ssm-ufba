<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
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
