<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    public $primaryKey = 'info_id';

    protected $fillable = [
        'client_id','info_quota','info_unit','info_remark','info_notice'
    ];
}
