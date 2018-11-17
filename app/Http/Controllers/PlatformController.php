<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Requests\PlatformRequest;


class PlatformController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
 	 */
	public function index()
	{
		$platforms = \App\Platform::all();
		return view('cruds.platform.index', compact('platforms'));
	}

 	/**
 	 * Show the form for creating a new resource.
 	 *
 	 * @return \Illuminate\Http\Response
 	 */
 	public function create()
 	 {
 		if(999==999){ // input your acl or condition
 			//return redirect()->route('cruds.platform.create');
 			return view('cruds.platform.create');
 		}else{
 			return redirect()->route('cruds.platform.index');
 		}
 	}

 	/**
 	 * Store a newly created resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @return \Illuminate\Http\Response
 	 */
 	// public function store(Request $request)
 	public function store(PlatformRequest $request)
 	{
		// die(dd('teste'));
 			if(999==999){ // input your acl or condition

			//    	'name', 'desc', 'integration', 'ec', 'pp','active','details','img'

			\App\Platform::create([
				'name' => $request->name,
				'desc' => $request->desc,
				'integration' => $request->integration,
				'ec' => $request->ec,
				'pp' => $request->pp,
				'active' => $request->active,
				'details' => $request->details,
				'img' => $request->img,
				'order' => $request->order,
			]);

 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil adicionado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.platform.index');
 		}else{
 			return redirect()->route('cruds.platform.index');
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
 			$platform = \App\Platform::find($id);
 			// get previous user id
 			$previous = \App\Platform::where('id', '<', $platform->id)->max('id');
 			if($previous==null){
 				$previous = \App\Platform::orderBy('id','desc')->value('id');
 			}
 			// get next user id
 			$next = \App\Platform::where('id', '>', $platform->id)->min('id');
 			if($next==0){
 				$next = \App\Platform::orderBy('id','asc')->value('id');
 			}
 			return view('cruds.platform.show', compact('platform','previous','next','id'));
 		}else{
 			return redirect()->route('cruds.platform.index');
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
 			$platform = \App\Platform::find($id);

 			return view('cruds.platform.edit', compact('platform','id'));
 		}else{
 			return redirect()->route('cruds.platform.index');
 		}
 	}

 	/**
 	 * Update the specified resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @param  int  $id
 	 * @return \Illuminate\Http\Response
 	 */
 	// public function update(\App\Http\Requests\PlatformRequest $request, $id)
 	public function update(PlatformRequest $request, $id)
 	{
 		if(999==999){ // input your acl or condition

			\App\Platform::find($id)->update($request->all());

 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil atualizado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.platform.index');
 		}else{
 			return redirect()->route('cruds.platform.index');
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
 			$platform = \App\Models\Platform::find($id);
 			$platform->delete();
 			Session::flash('flash_message',['
 				msg'=>"Platform successfully removed!",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.platform.index');
 		}else{
 			return redirect()->route('cruds.platform.index');
 		}
 	}

 }
