<?php

namespace App\Http\Controllers;

use App\prestamistas;
use Illuminate\Http\Request;

class PrestamistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $prestamistas = prestamistas::all();
       return View::make(prestamistas.index)->with('prestamistas',$prestamistas);
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
        $prestamistas = new prestamistas();
        $prestamistas ->name->$request ->name;
        $prestamistas ->email->$request ->email;
        $prestamistas ->description->$request ->description;
        $prestamistas ->address->$request ->address;
        $prestamistas ->cp->$request->cp;
        $prestamistas ->id = auth()->prestamista()->id;
        $prestamistas ->save();
        return redirect('/inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prestamistas  $prestamistas
     * @return \Illuminate\Http\Response
     */
    public function show(prestamistas $prestamistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prestamistas  $prestamistas
     * @return \Illuminate\Http\Response
     */
    public function edit(prestamistas $prestamistas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prestamistas  $prestamistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prestamistas $prestamistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prestamistas  $prestamistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestamistas $prestamistas)
    {
        //
    }
}
