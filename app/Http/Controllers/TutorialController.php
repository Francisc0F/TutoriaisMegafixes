<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Exceptions\Handler;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("tutoriais.templateTutoriaisList");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inserted=null;
        if(Auth::check()){

            $categorias= DB::table('categorias')->select('nome_categoria', 'id_categoria')->get();

            return view("tutoriais.templateInserirTutorial",["categorias" => $categorias,"inserted"=>$inserted]);
        }
        return view("pages.error");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Auth::check()){

            $categorias= DB::table('categorias')->select('nome_categoria', 'id_categoria')->get();



            $validatedData = $request->validate([
                'title'=> 'bail|required',
                'select_categoria' => 'bail|required',
                'descricao' => 'required',
                'content' => 'required',
                'file'=>'required'

            ]);

            $user = Auth::user();

            $min =0;
            $max =99999;
            $random=rand (  $min , $max );

            $fileOriginalName= $request->file('file')->getClientOriginalName();


            $img_capa =$random."_".$user->id.".".File::extension($fileOriginalName);

            $filecontents= file_get_contents($validatedData["file"]);

            $file=Storage::disk('public')->put('Tutoriais_img_capa/'.$img_capa, $filecontents);
            $path = storage_path();

            //not working
           //$filemove=File::move($path."/Tutoriais_img_capa/".$fileOriginalName, $path."/Fotos_utilizadores/".$img_capa);





            //percisa de um trt catch


            $tutorial = new Tutorial();

            $tutorial->titulo =$validatedData["title"];
            $tutorial->id_categoria =$validatedData["select_categoria"];
            $tutorial->id_utilizador = $user->id;
            $tutorial->descricao =$validatedData["descricao"];
            $tutorial->content =$validatedData["content"];
            $tutorial->img_capa =$img_capa;

            $inserted= $tutorial->save();
//
//           $inserted= DB::table('tutorials')->insert(
//                ['id_categoria' => $validatedData["select_categoria"],
//                    'titulo'=>$validatedData["title"],
//                    'id_utilizador'=>$user->id,
//                    'descricao' => $validatedData["descricao"],
//                    'img_capa'=>$img_capa
//                ,'content'=>$validatedData["content"]]
//            );
//            $inserted->save();

                return view("tutoriais.templateInserirTutorial",["inserted"=> $inserted,"categorias" => $categorias]);



        }
       return view("pages.error");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            if($id!=null){

                $tutorial =Tutorial::where("id_tutorial",$id)->get();
          // dd($tutorial[0]);

                return view("tutoriais.templateVerTutorial",["tutorial"=>$tutorial[0]]);

            }

            return view("pages.error");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
