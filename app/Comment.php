<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'body', 'status', 'active', 'user_id','topic_id'
    ];

    // public function roles(){
    // 	return $this->belongsToMany(\App\Role::class);
    // }

    public function topic(){
      return $this->belongsTo('App\Topic','topic_id','id'); // externalModel, foreignKey, externalId
    }
    public function user(){
      return $this->belongsTo(\App\User::class);
    }

}
