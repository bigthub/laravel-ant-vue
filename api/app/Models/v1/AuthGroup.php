<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed roles
 * @property mixed introduction
 * @property mixed rules
 * @property string rules_implode
 * @property mixed id
 */
class AuthGroup extends Model
{

    /**
     * 获取管理组下的管理员。
     */
    public function admins()
    {
        return $this->belongsToMany(Admin::class);
    }

}
