<?php

namespace App\Models;


class Impact extends Init
{
    protected $guarded = [];

    protected $fillable = [
        'description',
        'color',
        'points',
        'days',
        'classification',
        'example',
    ];
}
