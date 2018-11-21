<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\InstructionRequest;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;

use File;



class InstructionController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
 	 */
	public function index()
	{
		$platforms = \App\Platform::All();
		// $instructions = \App\Instruction::all();
		return view('cruds.instruction.index', compact('platforms'));
	}

 	/**
 	 * Show the form for creating a new resource.
 	 *
 	 * @return \Illuminate\Http\Response
 	 */
 	public function create($platform_id)
 	 {

 		if(999==999){ // input your acl or condition
			$platform = \App\Platform::find($platform_id);
 			//return redirect()->route('cruds.instruction.create');
 			return view('cruds.instruction.create',compact('platform'));
 		}else{
 			return redirect()->route('cruds.instruction.index');
 		}
 	}

 	/**
 	 * Store a newly created resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @return \Illuminate\Http\Response
 	 */
	public function imgUpdate(Request $request){
		$this->validate($request, ['img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],['img.required'=>'Imagem requerida']);

		// delete old img
		$instruction = \App\Instruction::find($request->id);
		if(File::exists("img/instructions/".$instruction->img)) {
    	File::delete("img/instructions/".$instruction->img);
		}
		// create new img
		// $string = str_replace(' ', '', $string);

		$imgName = "instruction-".str_replace(' ', '', $request->platform_id)."-".$request->order.".".$request->img->getClientOriginalExtension();
		$this->validate($request, ['img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
		$img = Image::make($request->file('img')->getRealPath());
		// $img->resize(320, 240);
		// $img->resize(160, 120);
		$img->save('img/instructions/'.$imgName);
		//"imgName: instruction-LojaIntegrada.jpg - instruction->img: instruction-LojaIntegrada.jpg"
		//update db
		$instruction->img = $imgName;
		// dd("imgName: nome da imagem que sera salvo na galeria: ".$imgName."\n\ninstruction->img: nome da imagem atualizada no banco de dados: ".$instruction->img);
		$instruction->save;
		// dd($instruction);

		\App\Instruction::find($request->id)->update([
			'img'=> $instruction->img
		]);


		return redirect()->route('cruds.instruction.img',$request->id);

	}
	public function imgStore($imgName,$request){
			$this->validate($request, ['img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],['img.required'=>'Imagem requerida','img.image'=>'Arquivo deve ser uma imagem']);
			$img = Image::make($request->file('img')->getRealPath());
			$img->save('img/instructions/'.$imgName);

	}
	public function img($id){
			$instruction = \App\Instruction::find($id);
			return view('cruds.instruction.img',compact('id','instruction'));
	}
 	public function store(InstructionRequest $request)
 	{
			// dd($request->all());
			// 'title', 'body', 'img', 'order', 'status', 'active','user_id','platform_id'

			if(999==999){ // input your acl or condition

			$imgName = "instruction-".str_replace(' ', '', $request->platform_id)."-".$request->order.".".$request->img->getClientOriginalExtension();
			// dd($imgName);
			$this->imgStore($imgName,$request);

			\App\Instruction::create([
				'title' => $request->title,
				'body' => $request->body,
				'img' => $imgName,
				'order' => $request->order,
				'status' => $request->status,
				'active' => $request->active,
				'user_id' => $request->user_id,
				'platform_id' => $request->platform_id,
			]);

 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Instrução adicionada com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.instruction.show',$request->platform_id);
 		}else{
 			return redirect()->route('cruds.instruction.index');
 		}
 	}

 	/**
 	 * Display the specified resource.
 	 *
 	 * @param  int  $id
 	 * @return \Illuminate\Http\Response
 	 */
 	public function show($platform_id)
 	{

 		if(999==999){ // input your acl or condition
 			$platform = \App\Platform::find($platform_id);
			// dd($platform->instructions);

 			return view('cruds.instruction.show', compact('platform'));
 		}else{
 			return redirect()->route('cruds.instruction.index');
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
 			$instruction = \App\Instruction::find($id);

 			return view('cruds.instruction.edit', compact('instruction','id'));
 		}else{
 			return redirect()->route('cruds.instruction.index');
 		}
 	}

 	/**
 	 * Update the specified resource in storage.
 	 *
 	 * @param  \Illuminate\Http\Request  $request
 	 * @param  int  $id
 	 * @return \Illuminate\Http\Response
 	 */
 	// public function update(\App\Http\Requests\InstructionRequest $request, $id)
 	public function update(InstructionRequest $request, $id)
 	{
 		if(999==999){ // input your acl or condition


			\App\Instruction::find($id)->update($request->all());

 			\Session::flash('flash_message',[
 				'title'=>"Sucesso!",
 				'msg'=>"Perfil atualizado com êxito",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.instruction.index');
 		}else{
 			return redirect()->route('cruds.instruction.index');
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
 			$instruction = \App\Models\Instruction::find($id);
 			$instruction->delete();
 			Session::flash('flash_message',['
 				msg'=>"Instruction successfully removed!",
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.instruction.index');
 		}else{
 			return redirect()->route('cruds.instruction.index');
 		}
 	}

 }
