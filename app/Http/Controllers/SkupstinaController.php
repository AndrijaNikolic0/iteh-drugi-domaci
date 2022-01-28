<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursSkupstina;
use App\Models\Skupstina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SkupstinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sveSkupstine = Skupstina::all();
        return ResursSkupstina::collection($sveSkupstine);
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
     * @param  \App\Models\Skupstina  $skupstina
     * @return \Illuminate\Http\Response
     */
    public function show(Skupstina $skupstina)
    {
        return new ResursSkupstina($skupstina);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skupstina  $skupstina
     * @return \Illuminate\Http\Response
     */
    public function edit(Skupstina $skupstina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skupstina  $skupstina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skupstina $skupstina)
    {
        $validator = Validator::make($request->all(), [
            'grad' => 'required|string',
            'drzava' => 'required|string',
            'brojPoslanika' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $skupstina->grad = $request->grad;
        $skupstina->drzava = $request->drzava;
        $skupstina->brojPoslanika = $request->brojPoslanika;

        $skupstina->save();

        return response()->json(['Uspešno izmenjena skupština', new ResursSkupstina($skupstina)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skupstina  $skupstina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skupstina $skupstina)
    {
        $skupstina->delete();
        return response()->json(['Uspešno obrisana skupština', new ResursSkupstina($skupstina)]);
    }
}
