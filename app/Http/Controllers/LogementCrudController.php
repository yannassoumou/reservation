<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Gare;
use App\Logement;
use App\Quartier;
use Illuminate\Database\Eloquent\Concerns\GuardsAttributes;
use Illuminate\Http\Request;
use Gate;

class LogementCrudController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logement = Logement::all();
        $quartier = Quartier::all();
        return view('logement.log.index', compact('logement'))->with('quartier', $quartier);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Logement::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $logement = Logement::findOrFail($request->log_id);

        $logement->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $logement = Logement::findOrFail($request->log_id);
        $logement->delete();

        return back();

    }
}
