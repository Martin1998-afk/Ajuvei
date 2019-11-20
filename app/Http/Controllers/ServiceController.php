<?php

namespace App\Http\Controllers;

use App\prestamistas;
use App\Service;
use App\ServiceUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $services = Service::all();
        $users = User::all();
        $prestamistas = prestamistas::all();
        return view('anuncio',['services' => $services, 'prestamistas' =>$prestamistas]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('anuncio',['services' => $services]);
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
        $service = new prestamistas();
        $service->name = $request->name;
        $service->email = $request->email;
        $service->description = $request->description;
        $service->address = $request->address;
        $service->cp = $request->cp;
        $service->save();
        return view('/servicios');

        $servuser = new ServiceUser();
        $servuser->service_id = $service->id;
        $servuser->user_id = Auth::user()->id; 
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(prestamistas $id)
    {
        $prestamistas = prestamistas::find($id);
        return \View::make("servicios")->with(compact('id'));
        //$s = DB::table('service_users')
          //  ->select('*')
            //->leftJoin('services', 'services.id', '=', 'service_users.service_id')
            //->leftJoin('users', 'users.id', '=', 'service_users.user_id')
            //->where('service_users.service_id','=',$id)
            //->get();

        //return $s;
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
