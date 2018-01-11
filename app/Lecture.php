<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'name',
        'rhythm_type_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rhythmType()
    {
        return $this->belongsTo('App\RhythmType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function modules()
    {
        return $this->belongsToMany('App\Module');
    }
}
