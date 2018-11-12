<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Request;

class PermissionController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
 	 */
	public function index()
	{
		$permissions = \App\Permission::all();
		return view('cruds.permission.index', compact('permissions'));
	}

 	/**
 	 * Show the form for creating a new resource.
 	 *
 	 * @return \Illuminate\Http\Response
 	 */
 	public function create()
 	 {
 		if(999==999){ // input your acl or condition
 			//return redirect()->route('cruds.permission.create');
 			return view('cruds.permission.create');
 		}else{
 			return redirect()->route('cruds.permission.index');
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
		// die(dd('teste'));
 			if(999==999){ // input your acl or condition
			$validatedData = $request->validate([
	        'label' => 'required|unique:permissions|max:25',
	        'name' => 'required|unique:permissions|max:25',
	    ]);


 			\App\Permission::create([
				'name' => $request->name,
				'label' => $request->label
			]);

 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil adicionado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.permission.index');
 		}else{
 			return redirect()->route('cruds.permission.index');
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
 			$permission = \App\Permission::find($id);
 			// get previous user id
 			$previous = \App\Permission::where('id', '<', $permission->id)->max('id');
 			if($previous==null){
 				$previous = \App\Permission::orderBy('id','desc')->value('id');
 			}
 			// get next user id
 			$next = \App\Permission::where('id', '>', $permission->id)->min('id');
 			if($next==0){
 				$next = \App\Permission::orderBy('id','asc')->value('id');
 			}
 			return view('cruds.permission.show', compact('permission','previous','next','id'));
 		}else{
 			return redirect()->route('cruds.permission.index');
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
 			$permission = \App\Permission::find($id);

 			return view('cruds.permission.edit', compact('permission','id'));
 		}else{
 			return redirect()->route('cruds.permission.index');
 		}
 	}

 	/**
 	 * Update the specified resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @param  int  $id
 	 * @return \Illuminate\Http\Response
 	 */
 	// public function update(\App\Http\Requests\PermissionRequest $request, $id)
 	public function update(Request $request, $id)
 	{
		//Request $request
 		if(999==999){ // input your acl or condition
 			\App\Permission::find($id)->update($request->all());
 			$permission = \App\Permission::find($id);// $permission->name=Input::get('name');permission->save()//$request->input('input_html')
 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil atualizado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.permission.index');
 		}else{
 			return redirect()->route('cruds.permission.index');
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
 			$permission = \App\Models\Permission::find($id);
 			$permission->delete();
 			Session::flash('flash_message',['
 				msg'=>"Permission successfully removed!",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.permission.index');
 		}else{
 			return redirect()->route('cruds.permission.index');
 		}
 	}

 }
