<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Schema;

class AngerController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    public function index(){
        return view('anger.index');
    }
    public function users()
    {
        $users = \App\User::all();
        $asset = asset('');
        return view('anger.users', compact('asset','users'));
    }
    public function user($id)
    {
        $user = \App\User::find($id);
        $roles = \App\Role::all();

        // dd($roles);
        // die(var_dump($roles));
        $asset = asset('');
        return view('anger.user', compact('asset','user','roles'));
    }
    public function userRoleAttach(Request $request){

        // die(dd($request->add_role_id));
        // die(dd("teste"));
        if(999==999){ // input your acl or condition

            //$user = Auth::user();
            $user = \App\User::find($request->user_id);
            // dd($user);
            $roleId = (int)$request->add_role_id;
            $user->roles()->attach($roleId);
            // $user->roles()->detach($roleId);

            //$last_id = \App\Role::limit(1)->orderBy('role_id','desc')->value('role_id');
            //$role = \App\Role::create(['model_column'=>$request->input('input_html'),'model_column2'=>$request->input('input_html2'),]);
            //$role = new Role; $role->name = $request->input('input_html'); $role->save(); //insertedId = $role->id;
            \Session::flash('flash_message',[
                'msg'=>"Operação realizada com sucesso!",
                'class'=>"alert-success"
            ]);
            return redirect()->route('anger.user',$user->id);
        }else{
            return redirect()->route('anger.user',$user->id);
        }

    }

    public function userRoleDetach(Request $request){
        // dd("fodaci");
        if(999==999){
            //$user = Auth::user();
            $user = \App\User::find($request->user_id);
            $roleId = (int)$request->detach_role_id;
            // dd($roleId);
            $user->roles()->detach($roleId);


            \Session::flash('flash_message',[
                'msg'=>"Role successfully deleted!",
                'class'=>"alert-success"
            ]);
            return redirect()->route('anger.user',$user->id);
        }else{
            return redirect()->route('anger.user',$user->id);
        }
    }


    public function roles()
    {
        $roles = \App\Role::all();
        $asset = asset('');
        return view('anger.roles', compact('asset','roles'));
    }
    public function role($id)
    {
        $role = \App\Role::find($id);
        $permissions = \App\Permission::all();
        $asset = asset('');
        return view('anger.role', compact('asset','role','permissions'));
    }

    public function rolePermissionAttach(Request $request){
        if(999==999){ // input your acl or condition

            //$user = Auth::user();
            //dd($request->role_id);
            $role = \App\Role::find($request->role_id);
            $permission_id = (int)$request->add_permission_id;

            // dd($permission_id);


            // dd($role);

            $role->permissions()->attach($permission_id);
            // $user->roles()->detach($roleId);

            //$last_id = \App\Role::limit(1)->orderBy('role_id','desc')->value('role_id');
            //$role = \App\Role::create(['model_column'=>$request->input('input_html'),'model_column2'=>$request->input('input_html2'),]);
            //$role = new Role; $role->name = $request->input('input_html'); $role->save(); //insertedId = $role->id;
            \Session::flash('flash_message',[
                'msg'=>"Permission successfully stored!",
                'class'=>"alert-success"
            ]);
            return redirect()->route('anger.role',$role->id);
        }else{
            return redirect()->route('anger.role',$role->id);
        }

    }

    public function rolePermissionDetach(Request $request){

        if(999==999){

            //$user = Auth::user();
        $role = \App\Role::find($request->role_id);

        $permission_id = (int)$request->detach_permission_id;
        //dd($permission_id);
        $role->permissions()->detach($permission_id);

            \Session::flash('flash_message',[
                'msg'=>"Permission successfully deleted!",
                'class'=>"alert-success"
            ]);
            return redirect()->route('anger.role',$role->id);
        }else{
            return redirect()->route('anger.role',$role->id);
        }

    }

    public function permissions(){
        $permissions = \App\Permission::all();
        $asset = asset('');
        // $user = \Auth::User();
        return view('anger.permissions', compact('permissions', 'asset'));
    }


    public function profile()
    {
        if (\Auth::check()) {

            $roles = \App\Role::all();
            $permissions = \App\Permission::all();
            $user = Auth::user();

            return view('anger.profile', compact('roles','permissions'));
        }else{
            return view('login');
        }
    }

    public function check(){
        if (\Auth::check()) {

            $permissions = \App\Permission::all();

            $checkPermissionVar = 'create_user';
            // $checkCanMode = \Auth::User()->can('create_user') ? "Check Can Success" : "Check Can Error";
            $checkGateMode = \Illuminate\Support\Facades\Gate::allows($checkPermissionVar) ? "Check Gate Success" : "Check Gate Error";
            $checkAuthMode = $this->authorize($checkPermissionVar) ? "Check Auth Success" : "Check Auth Error";

            // echo $checkGateMode." - ".$checkAuthMode;
            return view('anger.check', compact('permissions'));

        }else{
            echo "Você precisa estar logado";
        }
    }

    public function tutorial(){
        return view('anger.tutorial');
    }



    public function test(){
      $permission = \App\Permission::find(1);
      $permission_roles = $permission->roles;

      $user = Auth::user();

      // foreach($user->roles as $role){
      //   echo $role;
      // }
      // echo $permission_roles; // output ADMIN e TESTE
      /*
      output
      [
        {
        id: 1,
        name: "admin",
        label: "Admin",
        created_at: "2018-11-11 17:49:00",
        updated_at: "2018-11-11 21:00:40",
        pivot: {
        permission_id: "1",
        role_id: "1"
        }
        }
      ]
      */

      //
      // if (is_array($permission_roles) || is_object($permission_roles)) {
      //     echo "its is an array or obcjet for sure!!!";
      //     foreach ($permission_roles as $role) {
      //         if($this->roles->contains('name',$role->name)){
      //             return true;
      //
      //         }
      //     } // use this OR the return bellow
      //     //return !! $permission_roles->intersect($this->roles)->count(); // use this OR the FOREACH above
      // }
      //
      // foreach($permission as )
      // return $permission_roles;
    }


    // public function storeRole(\App\Http\Requests\RoleRequest $request){
    //   \App\Role::create($request->all());
 		// 	\Session::flash('flash_message',[
 		// 		'msg'=>"Perfil adicionado com sucesso!",
 		// 		'class'=>"alert-success"
 		// 	]);
 		// 	return redirect()->route('anger.roles');
    // }
}
