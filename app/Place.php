<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table="places";

    protected $fillable = [
        'name', 'description', 'type', 'logo', 'number', 'level_id'
    ];

    public function levels()
    {
        return $this->belongsTo(Level::class);
    }

    public function staff()
    {
        return $this->hasMany(User::class);
    }
}
