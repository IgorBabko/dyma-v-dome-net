<?php

namespace DymaVDomeNet;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Question extends Model
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
            'topic' => 10,
            'content' => 10,
            'answer' => 10,
        ],
    ];
}
