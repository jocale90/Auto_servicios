<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Mecanico;


class MecanicoController extends Controller
{

  public function index()
     {
        $mecanicos = Mecanico::all();
        return view('mecanico_create',["mecanicos"=>$mecanicos]);
     }

  public function create()
     {
        $mecanicos = Mecanico::all();
        return view('mecanico_create',["mecanicos"=>$mecanicos]);
     }

  public function store(Request $request)
    {
        Mecanico::create($request->all());
        return redirect()->route('mecanico.index')->with(['message' => 'Mecanico Creado']);
    }

  public function edit($id)
    {

    }

  public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

}
