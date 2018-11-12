<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;





class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //pasted

        $permissions = \App\Permission::with('roles')->get();

        foreach ($permissions as $permission) { // creates (looping) dinamicly all the Gates with all the permissions name instead creating a new Gate method to each new permission created
            // Gate::define($permission->name, function(\App\ACL\User $user) use($permission){
            Gate::define($permission->name, function() use($permission){
               // $user = \Auth::user(); //gets the user manually sinces the import ABOVE was broken
               // $user = \App\ACL\User::find($user->id);
               // $user = \App\User::find($user->id);
                $user = \Auth::User();
                $user = \App\User::find($user->id);
                return $user->hasPermission($permission); // model User
            });
        }

        // isAdm?
        // Gate::before(function(User $user, $ability){

        Gate::before(function($ability){
            $user = \Auth::user(); //gets the user manually sinces the import ABOVE was broken
            // $user = \App\ACL\User::find($user->id);
            $user = \App\User::find($user->id);
            if($user->hasAnyRoles('adm')){
                return true;
            }

        });

        //
    }
}
