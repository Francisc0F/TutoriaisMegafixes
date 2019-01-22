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


    public function getAuthors(){

        if(Auth::check())
            if(Auth::user()->tipo_utilizador == "admin")
                return    $autoresAll=Utilizador::where("tipo_utilizador","autor")->with("tutoriais")->get();

        return view("pages.error");


    }



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

    public function myAcc($id=null){
        if(Auth::check() ) {
            if (Auth::User()->tipo_utilizador == "admin") {

                if ($id != null) {
                    //editing others
                    $user = utilizador::find($id);

                    $tutoriais = Tutorial::where("id_utilizador", $user->id)->get();


                    return view("templates.templateOthersAccAdmin", ["user" => $user, "tutoriais" => $tutoriais]);
                }

            }
        }

        if(Auth::check() ){
            $user = Auth::user();

            $tutoriais=Tutorial::where("id_utilizador",$user->id)->get();

//            dd($tutoriais);
            return view("templates.templateMyacc",["user"=>$user,"tutoriais"=>$tutoriais]);
        }

        return view("pages.error");
    }










    public function tutoriaisList($iduser){


        if(Utilizador::find($iduser)){
            $users=Utilizador::where("tipo_utilizador","autor")->where("id",$iduser)->with("tutoriais")->get();

            return view("tutoriais.templateTutoriaisListComId",["users"=>$users]);


        }
        return view("pages.error");

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


    public function update(Request $request, $id)
    {


        if($request->file('file') ==null){
            $insert =DB::table('utilizadors')
                ->where('id', $id)
                ->update([
                    'name' => $request->first_name,
                    'email'=>$request->email,
                    'cidade_utilizador'=>$request->cidade,
                    'pais_utilizador'=>$request->pais
                ]);

            if(Auth::User()->tipo_utilizador=="admin" and $insert){


                return redirect("/acc/".Auth::User()->id)->with("message","Utilizador Atualizado com sucesso ".Auth::User()->name);
            }



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
            if(Auth::User()->tipo_utilizador=="admin"){

                return redirect()->back()->with("message","Ocorreu Um Erro! ".Auth::User()->name);
            }
            return redirect("/acc")->with("message","Ocorreu Um Erro!");


        }
        if(Auth::User()->tipo_utilizador=="admin"){

            return redirect()->back()->with("message","Conta atualizada! ".Auth::User()->name);
        }
        return redirect("/acc")->with("message","Conta atualizada!");




    }


    public function destroy($id)
    {
       if(Auth::check()){
           if(Auth::user()->id == $id or Auth::user()->tipo_utilizador ="admin"){

               $user=Utilizador::find($id);
               if($user->img_profile_utilizador!="img-default.png") {
                   if (Storage::disk('public')->delete('Fotos_utilizadores/' . $user->img_profile_utilizador)) {

                       //imagem de conta apagada e user apagado

                   }
               }
               $user->delete();

                //tutoriais apagados
               $tutoriais =Tutorial::where("id_utilizador",$id)->get();

                if($tutoriais->count()==0 ){

                      //  dd($tutoriais);
                }else{

                    foreach ($tutoriais as $tutorial){
                        if($tutorial->img_capa!="img-tutorial-default.png"){

                            Storage::disk('public')->delete('Fotos_utilizadores/'.$tutorial->img_capa);


                        }
                        $tutorial->delete();

                    }

                }

                if(Auth::user()->tipo_utilizador ="admin"){
                    return redirect("acc/".Auth::user()->id)->with("message","Conta apagada ".Auth::User()->name);
                }
                return redirect("/logout");
           }

       }

    }
}
