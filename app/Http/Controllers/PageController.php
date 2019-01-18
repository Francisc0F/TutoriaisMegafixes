<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;
use App\Categoria;
use App\utilizador;
use App\Tutorial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */
    static private function getTopWatched(){

        $usersTopWatched = DB::table('tutorials')
            ->join('utilizadors', 'utilizadors.id', '=', 'tutorials.id_utilizador')
            ->select(DB::raw('count(tutorials.id_utilizador)as num_tutoriais
            ,sum(num_views) as total_views, 
            tutorials.id_utilizador
            ,utilizadors.name,utilizadors.img_profile_utilizador,
            utilizadors.cidade_utilizador,
            utilizadors.pais_utilizador'))
            ->groupBy("tutorials.id_utilizador")->orderBy("total_views","desc")
            ->take(3)
            ->get();

        return $usersTopWatched;
    }

    public function index()
    {
            $users = Utilizador::where("tipo_utilizador","autor")->take(3)->get();


            //top recent
            $top3Recent =Tutorial::with("utilizador","categoria")->latest()->take(3)->get();


            //most viewed
            $MostWatchtutorial = Tutorial::with("utilizador","categoria")->orderBy("num_views","desc")->take(4)->get();


            $usersTopWatched=PageController::getTopWatched();

                //user var
                 $user = Auth::user();



        return view("pages.start",
            ["users"=> $users,
            "Recent"=>$top3Recent,
            "Mostwatch"=>$MostWatchtutorial,
             "usersTopWatched"=>$usersTopWatched
            ,"user" => $user]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
