<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    protected $fillable = [
    	'title', 'body', 'img', 'order', 'status', 'active','user_id','platform_id'
    ];

    // public function roles(){
    // 	return $this->belongsToMany(\App\Role::class);
    // }

    public function user(){
      return $this->belongsTo(\App\User::class);
    }
    public function platform(){
      return $this->belongsTo(\App\Platform::class);
    }



}
