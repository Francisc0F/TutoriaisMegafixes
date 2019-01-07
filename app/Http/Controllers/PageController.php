<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;
use App\Categoria;
use App\utilizador;
use App\Tutorial;
use Illuminate\Support\Facades\DB;

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

        $usersTopWatched=DB::table('tutorials')
            ->select(DB::raw('sum(num_views) as total_views, id_utilizador'))
            ->groupBy("id_utilizador")
            ->orderBy("total_views","desc")
            ->take(3)
            ->get();






        return $usersTopWatched;
    }

    public function index()
    {
            $users = utilizador::where("tipo_utilizador","autor")->take(3)->get();


            //top recent
            $top3Recent =Tutorial::with("utilizador","categoria")->latest()->take(3)->get();


            //most viewed
            $MostWatchtutorial = Tutorial::with("utilizador","categoria")->orderBy("num_views","desc")->take(4)->get();


            $usersTopWatched=PageController::getTopWatched();

        return view("pages.start",
            ["users"=> $users,
            "Recent"=>$top3Recent,
            "Mostwatch"=>$MostWatchtutorial,
                "usersTopWatched"=>$usersTopWatched
            ]);
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
