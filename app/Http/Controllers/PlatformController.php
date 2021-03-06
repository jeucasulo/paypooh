<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\PlatformRequest;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;

use File;



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
	public function imgUpdate(Request $request){
		$this->validate($request, ['img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],['img.required'=>'Imagem requerida']);

		// delete old img
		$platform = \App\Platform::find($request->id);
		if(File::exists("img/plataformas/".$platform->img)) {
    	File::delete("img/plataformas/".$platform->img);
		}
		// create new img
		// $string = str_replace(' ', '', $string);

		$imgName = "platform-".str_replace(' ', '', $request->name).".".$request->img->getClientOriginalExtension();
		$this->validate($request, ['img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
		$img = Image::make($request->file('img')->getRealPath());
		$img->resize(320, 240);
		// $img->resize(160, 120);
		$img->save('img/plataformas/'.$imgName);
		//"imgName: platform-LojaIntegrada.jpg - platform->img: platform-LojaIntegrada.jpg"
		//update db
		$platform->img = $imgName;
		// dd("imgName: nome da imagem que sera salvo na galeria: ".$imgName."\n\nplatform->img: nome da imagem atualizada no banco de dados: ".$platform->img);
		$platform->save;
		// dd($platform);

		\App\Platform::find($request->id)->update([
			'img'=> $platform->img
		]);


		return redirect()->route('cruds.platform.img',$request->id);

	}
	public function imgStore($imgName,$request){
			$this->validate($request, ['img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],['img.required'=>'Imagem requerida','img.image'=>'Arquivo deve ser uma imagem']);
			$img = Image::make($request->file('img')->getRealPath());
			$img->save('img/plataformas/'.$imgName);

	}
	public function img($id){
			$platform = \App\Platform::find($id);
			return view('cruds.platform.img',compact('id','platform'));
	}
 	public function store(PlatformRequest $request)
 	{
 			if(999==999){ // input your acl or condition

			$imgName = "platform-".str_replace(' ', '', $request->name).".".$request->img->getClientOriginalExtension();
			// dd($imgName);
			$this->imgStore($imgName,$request);

			\App\Platform::create([
				'name' => $request->name,
				'desc' => $request->desc,
				'integration' => $request->integration,
				'ec' => $request->ec,
				'pp' => $request->pp,
				'active' => $request->active,
				'details' => $request->details,
				'img' => $imgName,
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
