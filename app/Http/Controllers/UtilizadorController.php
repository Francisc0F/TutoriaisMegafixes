<?php

namespace App\Http\Controllers;

use App\Tutorial;
use App\utilizador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class UtilizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $autores=Utilizador::where("tipo_utilizador","autor")
            ->join("tutorials","utilizadors.id","=",'tutorials.id_utilizador')
            ->select(DB::raw('utilizadors.id,name,sum(tutorials.num_views) as total_views,count(tutorials.id_utilizador)as num_tutoriais'))
            ->groupby("tutorials.id_utilizador")
            ->orderBy("total_views","desc")->paginate(6);


        if(!$autores){

            return view("pages.error");
        }
        $baseImgUrl= "/public/storage/Fotos_utilizadores";

        return view("autores.templateAuthorsList",["autores" => $autores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function myAcc(){

        if(Auth::check()){
            $user = Auth::user();

            $tutoriais=Tutorial::where("id_utilizador",$user->id)->get();

//            dd($tutoriais);
            return view("templates.templateMyacc",["user"=>$user,"tutoriais"=>$tutoriais]);
        }

        return view("pages.error");
    }



    public function tutoriaisList($iduser){


        $users=Utilizador::where("tipo_utilizador","autor")->where("id",$iduser)->with("tutoriais")->get();


        return view("tutoriais.templateTutoriaisListComId",["users"=>$users]);


    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if($request->file('file') ==null){
            DB::table('utilizadors')
                ->where('id', $id)
                ->update([
                    'name' => $request->first_name,
                    'email'=>$request->email,
                    'cidade_utilizador'=>$request->cidade,
                    'pais_utilizador'=>$request->pais
                ]);
//            Session::flash('message', '!');


            return redirect("/acc")->with("message","Utilizador Atualizado com sucesso");
         }

        $user= Utilizador::find($id);

        $fileOriginalName= $request->file('file')->getClientOriginalName();

        $random=rand (  0 , 999999 );

        $NovoNomeimg =$random."_".$id.".".File::extension($fileOriginalName);

        $filecontents= file_get_contents($request->file('file'));

        $file=Storage::disk('public')->put('Fotos_utilizadores/'.$NovoNomeimg, $filecontents);



        if($user->img_profile_utilizador!="img-default.png"){

            Storage::disk('public')->delete('Fotos_utilizadores/'. $user->img_profile_utilizador);

        }

        if($filecontents and $file){

            DB::table('utilizadors')
                ->where('id', $id)
                ->update([
                    'name' => $request->first_name,
                    'email'=>$request->email,
                    'cidade_utilizador'=>$request->cidade,
                    'pais_utilizador'=>$request->pais,
                    'img_profile_utilizador'=>$NovoNomeimg
                ]);
        }else{
            return redirect("/acc")->with("message","Ocorreu Um Erro!");


        }
        return redirect("/acc")->with("message","Conta atualizada!");




    }



    /**
     *
     *
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
