<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reg_std extends Model
{
    protected $fillable = [
            'id',
            'std_code',
            'name',
            'nick_name',
            'phone',
            'lineId',
            'email',
            'facebook',
            'address',
            'parent_name',
            'parent_phone',
            'user',
            'password'
    ];
}
