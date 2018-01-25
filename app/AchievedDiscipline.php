<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Discipline $discipline
 * @property Student $student
 * @property int $id
 * @property int $discipline_id
 * @property int $student_id
 * @property string $created_at
 * @property string $updated_at
 */
class AchievedDiscipline extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['discipline_id', 'student_id', 'created_at', 'updated_at'];

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
