<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    /**
     * @var array All fillable fields
     */
    protected $fillable = [
        'name',
        'link',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function lectures()
    {
        return $this->belongsToMany('App\Lecture');
    }
}
