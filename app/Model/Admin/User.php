<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'admin';

    protected $primaryKey = 'id';

    public $timestamps= false;

    // protected $fillable = ['uname','password','age','class'];
    
    protected $guarded = [];

    // public function uinfo(){
    // 	return $this->hasOne('App\Model\Admin\Userinfo','uid','id');
    // }
}
