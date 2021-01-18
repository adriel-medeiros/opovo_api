<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jornalista;

class JornalistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jornalistas = Jornalista::all()->toArray();
        return view('jornalista.index', compact('jornalistas'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jornalista.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'required',
            'senha' => 'required'
        ]);
        $jornalista = new Jornalista([
            'nome' => $request->get('nome'),
            'sobrenome' => $request->get('sobrenome'),
            'email' => $request->get('email'),
            'senha' => $request->get('senha')
        ]);
        $jornalista->save();
        return response(redirect()->route('api.index')->with('success',
            'Jornalista registrado com sucesso!'));
        //
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
