<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $primaryKey = 'client_id';

    protected $fillable = [
       'user_id','client_name','client_mobile'
    ];

}
