<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table="images";

    protected $fillable = [
        'images_url', 'description', 'place_id', 'sort'
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
