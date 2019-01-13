<?php

namespace App\Http\Controllers;

use App\Tutorial;
use Illuminate\Http\Request;
use App\Categoria;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias= Categoria::select(DB::raw('categorias.id_categoria,nome_categoria,sum(tutorials.num_views) as total_views
        ,count(tutorials.id_utilizador)as num_tutoriais_cat'))
            ->join("tutorials","categorias.id_categoria","=","tutorials.id_categoria")
            ->groupby("categorias.id_categoria")
            ->get();


        if(!$categorias){

            return view("pages.error");
        }



        return view("tutoriais.templateListCategorias",["categorias" => $categorias]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listTutoriais($idCat=null){

    if($idCat==null){

        return view("pages.error");


    }

    $tutoriais =Tutorial::where("id_categoria",$idCat)->get();
//
//        dd($tutoriais);

    return view("tutoriais.templateTutoriaisList",["tutoriais"=>$tutoriais]);

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
