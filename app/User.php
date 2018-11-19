<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Anger;

class User extends Authenticatable
{
    use Notifiable;
    use Anger;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function roles(){
        //dd($this->belongsToMany(\App\Role::class));
        return $this->belongsToMany(\App\Role::class);
        //return $this->hasMany('\App\Role','id');
    }


    public function hasPermission(Permission $permission){ //get the permission and find the Manager,Adm,Editor and send it to hasAnyRole

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
}
