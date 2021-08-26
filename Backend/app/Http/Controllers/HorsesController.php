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
                'message'=> 'OK']);
                
        // return response()->json([
        //     'message'=> 'OK',
        //     "data"=> horses::create([
        //         'horse_nom' => $request->input('horse_nom'),
        //         'horse_cle' => $request->input('horse_cle'),
        //         'horse_sire' => $request->input('horse_sire'),
        //         'horse_race' => $request->input('horse_race'),
        //         'horse_robe' => $request->input('horse_robe'),
        //         'horse_sexe' => $request->input('horse_sexe'),
        //         'horse_country' => $request->input('horse_country'),
        //         'horse_taille' => $request->input('horse_taille'),
        //         'horse_datenaissance' => $request->input('horse_datenaissance'),
        //         'horse_pere' => $request->input('horse_pere'),
        //         'horse_mere' => $request->input('horse_mere')
        //     ])
        // ], 201);
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
