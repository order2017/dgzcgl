<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const ROLE_MANAGE = 30;
    const ROLE_MANAGE_USER = 20;

    const ROLE_USER = 10;

    const CACHE_TIME = 60;

    const SEX_SECRET = 0;
    const SEX_MAN = 1;
    const SEX_WOMAN = 2;

    public $primaryKey = 'user_id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'user_email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public static function sexLabelList()
    {
        return [
            self::SEX_SECRET => '保密',
            self::SEX_MAN => '男',
            self::SEX_WOMAN => '女'
        ];
    }
    public function getUserSexTextAttribute()
    {
        return empty($this->user_sex) ? self::sexLabelList()[$this->user_sex] : self::sexLabelList()[$this->user_sex];
    }

    public static function roleLabelList()
    {
        return [
            self::ROLE_MANAGE => 'VIP用户',
            self::ROLE_MANAGE_USER=> '高级用户',
            self::ROLE_USER => '普通用户'
        ];
    }
    public function getUserRoleTextAttribute()
    {
        return empty($this->user_role) ? self::roleLabelList()[$this->user_role] : self::roleLabelList()[$this->user_role];
    }
}
