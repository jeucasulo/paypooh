<?php

 namespace App\Models; 

  use Illuminate\Database\Eloquent\Model;

  class Perfil extends Model
  {
  		//protected $table = 'furys';//table name
  		//protected $primaryKey = 'pdt_id';//table pk
  		protected $fillable = [
  			'id', 'name', 'label',
  		];

  		//public function hasManyFunction(){
  		//  return $this->hasMany('HasManyFromThis-App\OtherModelName','OtherTableId-column_table','thisTableRelationId-id');
  		//}

  		//public function belongsToThisModelItem(){
  		//return $this->belongsToMany('belongsToThis-App\OtherModelName');
  		//}

  		//public function hasOne/singularName(){
  		//return $this->hasOne('HasOneOfThis-App\OtherModelName','OtherTableId-column_table','thisTableRelationId-id')
  		//}
  }
