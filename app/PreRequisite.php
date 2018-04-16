<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class PreRequisite extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['pre_discipline_id', 'post_discipline_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function preDiscipline()
    {
        return $this->belongsTo('App\CourseDiscipline', 'pre_discipline_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function postDiscipline()
    {
        return $this->belongsTo('App\CourseDiscipline', 'post_discipline_id');
    }
}
