<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const STATUS_NAO = 0;
    const STATUS_TWO = 1;

    public $primaryKey = 'client_id';

    protected $fillable = [
       'user_id','client_name','client_mobile'
    ];

    public function applyUser()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function getUserNameAttribute()
    {
        return $this->applyUser->user_name;
    }

    public function getUserMobileAttribute()
    {
        return $this->applyUser->user_mobile;
    }

    public static function statusLabelList()
    {
        return [
            self::STATUS_NAO => '申办中...',
            self::STATUS_TWO => '已结办',
        ];
    }

    public function getClientStatusTextAttribute()
    {
        return empty($this->client_status) ? self::statusLabelList()[$this->client_status] : self::statusLabelList()[$this->client_status];
    }

}
