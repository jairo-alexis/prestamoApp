<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Carbon\Carbon;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // constructor para agregar la autentication requerida
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }

    public function index()
    {
        $clientes =Cliente::All();
       // echo $clientes;
        return view('clientes.index')-> with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        //2. capturar los valores enviandos desde el formulacion con la clase
        $cliente->name = $request->get('nombre');
        $cliente->apellido = $request->get('apellido');
        $cliente->email = $request->get('email');
        $cliente->profile_photo_path = $request->get('foto');
        $cliente->updated_at = Carbon::now();

        //2. guardar los datos en la bd
        $cliente->save();

        //3. Redireccionar al controlador
        return redirect('/clientes');

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
        //1. Buscar en la bd el ID que va a editar
        $cliente =Cliente::find($id);
        //$cliente = Cliente::find($id);

        return view('clientes.edit')->with('cliente', $cliente);

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
        //1. Buscar el Id en la bd que se va a modificar
        $cliente = Cliente::find($id);
        //2. capturar los valores enviandos desde el formulacion con la clase
        $cliente->name = $request->get('nombre');
        $cliente->apellido = $request->get('apellido');
        $cliente->email = $request->get('email');
        $cliente->profile_photo_path = $request->get('foto');
        $cliente->updated_at = Carbon::now();

        //2. guardar los datos en la bd
        $cliente->save();

        //3. Redireccionar al controlador
        return redirect('/clientes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       // echo "Estas eliminando algo". $id;

        //1. Buscar el Id en la bd que se va a eliminar
        $cliente = Cliente::find($id);
        //2. capturar los valores enviandos desde el formulacion con la clase
        $cliente->delete();
        //3. Redireccionar a la vista
        return redirect('/clientes');


    }
}
