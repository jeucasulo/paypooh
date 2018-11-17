<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Request;
use App\Http\Requests\TopicRequest;


class TopicController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
 	 */
	public function index()
	{
		$topics = \App\Topic::all();
		return view('cruds.topic.index', compact('topics'));
	}

 	/**
 	 * Show the form for creating a new resource.
 	 *
 	 * @return \Illuminate\Http\Response
 	 */
 	public function create()
 	 {
 		if(999==999){ // input your acl or condition
 			//return redirect()->route('cruds.topic.create');
			$platforms = \App\Platform::all();
 			return view('cruds.topic.create', compact('platforms'));
 		}else{
 			return redirect()->route('cruds.topic.index');
 		}
 	}

 	/**
 	 * Store a newly created resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @return \Illuminate\Http\Response
 	 */
 	public function store(TopicRequest $request)
 	{
		// die(dd('teste'));
 			if(999==999){ // input your acl or condition


 			\App\Topic::create($request->all());

 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil adicionado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.topic.index');
 		}else{
 			return redirect()->route('cruds.topic.index');
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
 			$topic = \App\Topic::find($id);
 			// get previous user id
 			$previous = \App\Topic::where('id', '<', $topic->id)->max('id');
 			if($previous==null){
 				$previous = \App\Topic::orderBy('id','desc')->value('id');
 			}
 			// get next user id
 			$next = \App\Topic::where('id', '>', $topic->id)->min('id');
 			if($next==0){
 				$next = \App\Topic::orderBy('id','asc')->value('id');
 			}
 			return view('cruds.topic.show', compact('topic','previous','next','id'));
 		}else{
 			return redirect()->route('cruds.topic.index');
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
 			$topic = \App\Topic::find($id);
			$platforms = \App\Platform::all();


 			return view('cruds.topic.edit', compact('topic','id','platforms'));
 		}else{
 			return redirect()->route('cruds.topic.index');
 		}
 	}

 	/**
 	 * Update the specified resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @param  int  $id
 	 * @return \Illuminate\Http\Response
 	 */
 	// public function update(\App\Http\Requests\TopicRequest $request, $id)
 	public function update(TopicRequest $request, $id)
 	{
		//Request $request
 		if(999==999){ // input your acl or condition
 			\App\Topic::find($id)->update($request->all());
 			$topic = \App\Topic::find($id);// $topic->name=Input::get('name');topic->save()//$request->input('input_html')
 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil atualizado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.topic.index');
 		}else{
 			return redirect()->route('cruds.topic.index');
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
 			$topic = \App\Models\Topic::find($id);
 			$topic->delete();
 			Session::flash('flash_message',['
 				msg'=>"Topic successfully removed!",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.topic.index');
 		}else{
 			return redirect()->route('cruds.topic.index');
 		}
 	}

 }
