<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Professor $professor
 * @property Schedule $schedule
 * @property int $id
 * @property int $professor_id
 * @property int $schedule_id
 * @property string $created_at
 * @property string $updated_at
 */
class ProfessorSchedule extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['professor_id', 'schedule_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function professor()
    {
        return $this->belongsTo('App\Professor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }
}
