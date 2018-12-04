<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
    	'name', 'desc', 'integration', 'ec', 'pp','active','details','img','order','platform_name'
    ];
    //platform_name is not a migration field, but a imported to name the instruction
    public function instructions(){
    	return $this->hasMany(\App\Instruction::class);
    }

}
