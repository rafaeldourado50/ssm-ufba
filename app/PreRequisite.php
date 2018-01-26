<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property CourseDiscipline $courseDiscipline
 * @property CourseDiscipline $courseDiscipline
 * @property int $id
 * @property int $pre_discipline_id
 * @property int $post_discipline_id
 * @property string $created_at
 * @property string $updated_at
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
    public function courseDiscipline()
    {
        return $this->belongsTo('App\CourseDiscipline', 'pre_discipline_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function courseDiscipline()
    {
        return $this->belongsTo('App\CourseDiscipline', 'post_discipline_id');
    }
}
