<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Request;
use App\Http\Requests\CommentRequest;


class CommentController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
 	 */
	public function index()
	{
		$comments = \App\Comment::all();
		return view('cruds.comment.index', compact('comments'));
	}

 	/**
 	 * Show the form for creating a new resource.
 	 *
 	 * @return \Illuminate\Http\Response
 	 */
 	public function create()
 	 {
 		if(999==999){ // input your acl or condition
 			//return redirect()->route('cruds.comment.create');
			$topics = \App\Topic::all();
 			return view('cruds.comment.create', compact('topics'));
 		}else{
 			return redirect()->route('cruds.comment.index');
 		}
 	}

 	/**
 	 * Store a newly created resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @return \Illuminate\Http\Response
 	 */
 	public function store(CommentRequest $request)
 	{
		
 			if(999==999){ // input your acl or condition


 			\App\Comment::create($request->all());

 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil adicionado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.comment.index');
 		}else{
 			return redirect()->route('cruds.comment.index');
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
 			$comment = \App\Comment::find($id);
 			// get previous user id
 			$previous = \App\Comment::where('id', '<', $comment->id)->max('id');
 			if($previous==null){
 				$previous = \App\Comment::orderBy('id','desc')->value('id');
 			}
 			// get next user id
 			$next = \App\Comment::where('id', '>', $comment->id)->min('id');
 			if($next==0){
 				$next = \App\Comment::orderBy('id','asc')->value('id');
 			}
 			return view('cruds.comment.show', compact('comment','previous','next','id'));
 		}else{
 			return redirect()->route('cruds.comment.index');
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
 			$comment = \App\Comment::find($id);
			$platforms = \App\Platform::all();


 			return view('cruds.comment.edit', compact('comment','id','platforms'));
 		}else{
 			return redirect()->route('cruds.comment.index');
 		}
 	}

 	/**
 	 * Update the specified resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @param  int  $id
 	 * @return \Illuminate\Http\Response
 	 */
 	// public function update(\App\Http\Requests\CommentRequest $request, $id)
 	public function update(CommentRequest $request, $id)
 	{
		//Request $request
 		if(999==999){ // input your acl or condition
 			\App\Comment::find($id)->update($request->all());
 			$comment = \App\Comment::find($id);// $comment->name=Input::get('name');comment->save()//$request->input('input_html')
 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil atualizado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.comment.index');
 		}else{
 			return redirect()->route('cruds.comment.index');
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
 			$comment = \App\Models\Comment::find($id);
 			$comment->delete();
 			Session::flash('flash_message',['
 				msg'=>"Comment successfully removed!",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.comment.index');
 		}else{
 			return redirect()->route('cruds.comment.index');
 		}
 	}

 }
