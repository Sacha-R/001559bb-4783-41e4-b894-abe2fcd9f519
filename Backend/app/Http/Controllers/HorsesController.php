<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\horses;

class HorsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //Afin d'éviter de faire trop de requete du frontend vers le backend nous en effectuons qu'une seule en envoyant tous sous forme de tableaux.
        //Puis pour insérer en base de donnée nous insérons les éléments du tableaux 1 par 1
        $HorsesArray = $request->input('horses');
        foreach ($HorsesArray as $horse){
            horses::create([
                'horse_nom' => $horse['horse_nom'],
                'horse_cle' => $horse['horse_cle'],
                'horse_sire' => $horse['horse_sire'],
                'horse_race' => $horse['horse_race'],
                'horse_robe' => $horse['horse_robe'],
                'horse_sexe' => $horse['horse_sexe'],
                'horse_country' => $horse['horse_country'],
                'horse_taille' => $horse['horse_taille'],
                'horse_datenaissance' => $horse['horse_datenaissance'],
                'horse_pere' => $horse['horse_pere'],
                'horse_mere' => $horse['horse_mere'],
            ]);
        }

        return response()->json([
                'message'=> 'OK'], 201);
                
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
