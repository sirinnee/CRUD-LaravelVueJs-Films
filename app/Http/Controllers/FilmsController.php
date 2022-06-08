<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\films;

class FilmsController extends Controller
{
    public function index(){
        $films =films::all()->toArray();
        return array_reverse($films);
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
        $films = new films([
            'titre' => $request->input('titre'),
            'realisateur' => $request->input('realisateur'),
            'pays' => $request->input('pays'),
            'date_sortie' => $request->input('date_sortie'),
            'description' => $request->input('description'),
            'poster' => $request->input('poster'),
            'duree' => $request->input('duree'),
            'langue' => $request->input('langue')
            ]);
            $films->save();
            return response()->json('film créé !');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $films = films::find($id);
        return response()->json($films);
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
        //$id=$request->input('id');
        $films = films::find($id);
        $films->update($request->all());
        return response()->json('film MAJ !');
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
        $films = films::find($id);
        $films->delete();
        return response()->json('film supprimé !');
    }
}
