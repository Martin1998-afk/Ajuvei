<?php

namespace App\Http\Controllers;

use App\prestamistas;
use App\Service; 
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\View;

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
       return view('prestamistas',['prestamistas'=>$prestamistas]);
     // return View::make('prestamistas.index')->with('prestamistas',$prestamistas);
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
        $prestamistas = new prestamistas;
        $prestamistas->name = $request->name;
        $prestamistas->email = $request->email;
        $prestamistas->description = $request->description;
        $prestamistas->address = $request->address;
        $prestamistas->cp = $request->cp;
        $prestamistas ->id = auth()->prestamista()->id;
        $prestamistas->save();
        return view('/service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prestamistas  $prestamistas
     * @return \Illuminate\Http\Response
     */
    public function show(prestamistas $id)
    {
        $prestamistas = prestamista::find($id);
        return View::make("prestamistas.show")->with(compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prestamistas  $prestamistas
     * @return \Illuminate\Http\Response
     */
    public function edit(prestamistas $prestamistas)
    {
        
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
