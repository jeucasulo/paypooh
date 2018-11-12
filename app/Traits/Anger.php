<?php
namespace App\Traits;

use App\Permission;

// use App\Brand;

trait Anger {
			public function roles(){
	        //dd($this->belongsToMany(\App\Role::class));
	        return $this->belongsToMany(\App\Role::class);
	        //return $this->hasMany('\App\Role','id');
	    }


	    public function hasPermission(Permission $permission){ //get the permission and find the Manager,Adm,Editor and send it to hasAnyRole
					// file_put_contents('0_olares.txt',$permission);
					 // $permission;
		        return $this->hasAnyRoles($permission->roles); // uses the function roles() above
	    }

	    public function hasAnyRoles($permission_roles){ // get the Manager, Adm, Editor and check if the User->roles() created above has this same 'name'

	        if (is_array($permission_roles) || is_object($permission_roles)) {
	            foreach ($permission_roles as $role) {
	                if($this->roles->contains('name',$role->name)){
	                    return true;
	                }
	            } // use this OR the return bellow
	            //return !! $permission_roles->intersect($this->roles)->count(); // use this OR the FOREACH above
	        }

	        return $this->roles->contains('name',$permission_roles);
	    }




	    //checks if the the user has the received role
	    public function hasRole($role){

	            if($this->roles->contains('name',$role->name)){
	                return true;
	            }
	        // return false;
	    }


}
