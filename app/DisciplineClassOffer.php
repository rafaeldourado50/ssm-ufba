<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property DisciplineClass $disciplineClass
 * @property CourseClassOffer[] $courseClassOffers
 * @property int $id
 * @property int $discipline_class_id
 * @property int $vacancies
 * @property string $created_at
 * @property string $updated_at
 */
class DisciplineClassOffer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['discipline_class_id', 'vacancies', 'created_at', 'updated_at'];

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
    public function courseClassOffers()
    {
        return $this->hasMany('App\CourseClassOffer');
    }
}
