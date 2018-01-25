<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property ProfessorSchedule[] $professorSchedules
 * @property int $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class Professor extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function professorSchedules()
    {
        return $this->hasMany('App\ProfessorSchedule');
    }
}
