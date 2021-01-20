<?php

namespace App\Models\v1;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed title
 * @property mixed api
 * @property mixed pid
 * @property int state
 * @property mixed|string url
 * @property mixed|string icon
 * @property mixed|string sort
 */
class AuthRule extends Model
{

    const AUTH_RULE_STATE_ON = 1;

    protected $appends = ['state_show'];

    /**
     * 数组中的属性会被展示。
     *
     * @var array
     */
//    protected $visible = ['api'];
    /**
     * 数组中的属性会被隐藏。
     *
     * @var array
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
//    protected $hidden = ['password'];
    public function AuthGroup()
    {
        return $this->belongsToMany(AuthGroup::class,'auth_group_auth_rules');
    }

    //是否显示在菜单栏state_show
    public function getStateShowAttribute()
    {
        if(isset($this->attributes['state'])){
            if($this->attributes['state'] == AuthRule::AUTH_RULE_STATE_ON){
                return '显示';
            }else{
                return '隐藏';
            }
        }

    }

}
