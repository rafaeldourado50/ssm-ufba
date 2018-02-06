<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class ProfessorSchedule extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['professor_id', 'schedule_id'];

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
