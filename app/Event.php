<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * @var array all fillable fields
     */
    protected $fillable = [
        'link',
        'room',
        'text',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function term()
    {
        return $this->belongsTo('App\Term');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function docent()
    {
        return $this->belongsTo('App\Docent');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lecture()
    {
        return $this->belongsTo('App\Lecture');
    }
}
