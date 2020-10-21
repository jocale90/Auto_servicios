<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Sucursal;


class SucursalController extends Controller
{

  public function index()
     {
        $sucursales = Sucursal::all();
        return view('sucursal_create',["sucursales"=>$sucursales]);
     }

  public function create()
     {
        $sucursales = Sucursal::all();
        return view('sucursal_create',["sucursales"=>$sucursales]);
     }

  public function store(Request $request)
    {
        Sucursal::create($request->all());
        return redirect()->route('sucursal.index')->with(['message' => 'Sucursal Creada']);
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
