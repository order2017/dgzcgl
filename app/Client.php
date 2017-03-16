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

    public function apply()
    {
        return $this->belongsTo('App\Info', 'client_id');
    }

    public function getInfoSourceAttribute()
    {
        return $this->apply->info_source;
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
