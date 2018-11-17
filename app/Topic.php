<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
    	'name', 'info', 'status', 'active', 'platform_id','user_id'
    ];

    // public function roles(){
    // 	return $this->belongsToMany(\App\Role::class);
    // }

    public function platform(){
      return $this->belongsTo('App\Platform','platform_id','id'); // externalModel, foreignKey, externalId
    }
    public function user(){
      return $this->belongsTo(\App\User::class);
    }

}
