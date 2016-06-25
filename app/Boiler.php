<?php

namespace DymaVDomeNet;

use Illuminate\Database\Eloquent\Model;

class Boiler extends Model
{
    protected $guarded = [];

    use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'name' => 10,
            'description' => 10,
        ],
    ];
}
