<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model {

    protected $table = 'publication';
    protected $fillable = [
        'message',
        'user_id'
    ];

}
