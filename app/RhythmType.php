<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RhythmType extends Model
{
    /**
     * @var array All fillable database fields
     */
    protected $fillable = ['name', 'type'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lectures()
    {
        return $this->hasMany('App\Lecture');
    }
}
