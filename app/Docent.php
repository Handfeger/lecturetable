<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docent extends Model
{
    /**
     * @var array all fillable fields
     */
    protected $fillable = [
        'name',
        'link',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
