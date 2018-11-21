<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
    	'name', 'desc', 'integration', 'ec', 'pp','active','details','img','order'
    ];

    public function instructions(){
    	return $this->hasMany(\App\Instruction::class);
    }

}
