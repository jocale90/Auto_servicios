<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Agenda;
use App\Models\Sucursal;
use App\Models\Mecanico;


class AgendaController extends Controller
{

  public function index()
     {
        $horas = Agenda::all();
        $sucursales = Sucursal::all();
        $mecanicos = Mecanico::all();
        return view('agenda',["sucursales"=>$sucursales,"mecanicos"=>$mecanicos,"horas"=>$horas]);
     }

  public function create()
     {
        $horas = Agenda::all();
        $sucursales = Sucursal::all();
        $mecanicos = Mecanico::all();
        return view('agenda',["sucursales"=>$sucursales,"mecanicos"=>$mecanicos,"horas"=>$horas]);
     }

  public function store(Request $request)
    {
                //Definicion parametros
                $fecha = date('Y-m-d H:i');
                $sucursal = $request->get("sucursal");
                $mecanico = $request->get("mecanico");
                $correo = $request->get("correo");
                $nombrec = $request->get("nombrec");

                $validar = Agenda::where('correo',$correo)->get();

                if(isset($validar))
                {
                    if(count($validar) > 0)
                    {
                            return redirect()->route('agenda.index')->with(['message' => 'El cliente ya tiene una hora agendada']); 
                    }
                    else
                    {
                        $agenda = Agenda::create([
                            'fecha' => $fecha,
                            'hora' => $request['hora'],
                            'sucursal' => $request['sucursal'],
                            'mecanico' => $request['mecanico'],
                            'correo' => $request['correo'],
                            'nombrec' => $request['nombrec'],
                        ]);
                            return redirect()->route('agenda.index')->with(['message' => 'Hora creada']); 
                    }
                }
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
