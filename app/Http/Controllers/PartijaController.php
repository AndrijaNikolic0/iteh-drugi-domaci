<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursPartija;
use App\Models\Partija;
use Illuminate\Http\Request;

class PartijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $svePartije = Partija::all();
        return ResursPartija::collection($svePartije);
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
     * @param  \App\Models\Partija  $partija
     * @return \Illuminate\Http\Response
     */
    public function show(Partija $partija)
    {
        return new ResursPartija($partija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partija  $partija
     * @return \Illuminate\Http\Response
     */
    public function edit(Partija $partija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partija  $partija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partija $partija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partija  $partija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partija $partija)
    {
        //
    }
}
