<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Request;

class RoleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
 	 */
	public function index()
	{
		$roles = \App\Role::all();
		return view('cruds.role.index', compact('roles'));
	}

 	/**
 	 * Show the form for creating a new resource.
 	 *
 	 * @return \Illuminate\Http\Response
 	 */
 	public function create()
 	 {
 		if(999==999){ // input your acl or condition
 			//return redirect()->route('cruds.perfis.create');
 			return view('cruds.role.create');
 		}else{
 			return redirect()->route('cruds.perfis.index');
 		}
 	}

 	/**
 	 * Store a newly created resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @return \Illuminate\Http\Response
 	 */
 	public function store(Request $request)
 	{
 			if(999==999){ // input your acl or condition
			$validatedData = $request->validate([
	        'label' => 'required|unique:roles|max:25',
	        'name' => 'required|unique:roles|max:25',
	    ]);


 			\App\Role::create([
				'name' => $request->name,
				'label' => $request->label
			]);

 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil adicionado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.perfil.index');
 		}else{
 			return redirect()->route('cruds.perfil.index');
 		}
 	}

 	/**
 	 * Display the specified resource.
 	 *
 	 * @param  int  $id
 	 * @return \Illuminate\Http\Response
 	 */
 	public function show($id)
 	{
 		if(999==999){ // input your acl or condition
 			$role = \App\Role::find($id);
 			// get previous user id
 			$previous = \App\Role::where('id', '<', $role->id)->max('id');
 			if($previous==null){
 				$previous = \App\Role::orderBy('id','desc')->value('id');
 			}
 			// get next user id
 			$next = \App\Role::where('id', '>', $role->id)->min('id');
 			if($next==0){
 				$next = \App\Role::orderBy('id','asc')->value('id');
 			}
 			return view('cruds.role.show', compact('role','previous','next','id'));
 		}else{
 			return redirect()->route('cruds.role.index');
 		}
 	}

 	/**
 	 * Show the form for editing the specified resource.
 	 *
 	 * @param  int  $id
 	 * @return \Illuminate\Http\Response
 	 */
 	public function edit($id)
 	{

 		if(999==999){ // input your acl or condition
 			$role = \App\Role::find($id);

 			return view('cruds.role.edit', compact('role','id'));
 		}else{
 			return redirect()->route('cruds.perfil.index');
 		}
 	}

 	/**
 	 * Update the specified resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @param  int  $id
 	 * @return \Illuminate\Http\Response
 	 */
 	// public function update(\App\Http\Requests\RoleRequest $request, $id)
 	public function update(Request $request, $id)
 	{
		//Request $request
 		if(999==999){ // input your acl or condition
 			\App\Role::find($id)->update($request->all());
 			$role = \App\Role::find($id);// $role->name=Input::get('name');role->save()//$request->input('input_html')
 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil atualizado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.perfil.index');
 		}else{
 			return redirect()->route('cruds.perfil.index');
 		}
 	}

 	/**
 	 * Remove the specified resource from storage.
 	 *
 	 * @param  int  $id
 	 * @return \Illuminate\Http\Response
 	 */
 	public function destroy($id)
 	{
 		if(999==999){ // input your acl or condition
 			$role = \App\Models\Role::find($id);
 			$role->delete();
 			Session::flash('flash_message',['
 				msg'=>"Role successfully removed!",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.role.index');
 		}else{
 			return redirect()->route('cruds.role.index');
 		}
 	}

 }
