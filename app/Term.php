<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    /**
     * @var array all fillable fields
     */
    protected $fillable = [
        'year',
        'status',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function event()
    {
        return $this->hasMany('App\Event');
    }
}
