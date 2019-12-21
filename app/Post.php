<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'post_id';
    protected $guarded = [
        'post_id'
    ];

}
