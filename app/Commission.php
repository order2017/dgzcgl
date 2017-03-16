<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    public $primaryKey = 'comm_id';

    protected $fillable = [
        'user_id','client_id','comm_number'
    ];
}
