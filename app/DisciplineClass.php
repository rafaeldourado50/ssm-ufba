<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Discipline $discipline
 * @property DisciplineClassOffer[] $disciplineClassOffers
 * @property Schedule[] $schedules
 * @property int $id
 * @property int $discipline_id
 * @property string $class_number
 * @property string $created_at
 * @property string $updated_at
 */
class DisciplineClass extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['discipline_id', 'class_number', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function discipline()
    {
        return $this->belongsTo('App\Discipline');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function disciplineClassOffers()
    {
        return $this->hasMany('App\DisciplineClassOffer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
}
