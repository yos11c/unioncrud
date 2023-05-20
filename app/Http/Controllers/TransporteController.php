<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class TransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indext()
    {
        $datos = Transporte::orderBy('id', 'asc')->paginate(3);
        return view('inicio-transporte', compact('datos'));
    }

    public function createt()
    {
        return view('agregar-transporte');
    }

    public function  storet(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $transportes = new Transporte();
        $transportes->id = $request->post('id');
        $transportes->nombre = $request->post('nombre');
        $transportes->razon_social = $request->post('razon_social');
//        $transportes->fecha = $request->post('fecha');
        $transportes->save();

        return redirect()->route("transportes.indext")->with("success", "Agregado con exito!");
    }

    public function showt($id)
    {
        $transportes = Transporte::find($id);
        return view("eliminar-transporte", compact('transportes'));
    }

    public function editt($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $transportes = Transporte::find($id);
        return view("actualizar-transporte", compact('transportes'));
        //echo $id;
    }

    public function updatet(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $transportes = Transporte::find($id);
        $transportes->id = $request->post('id');
        $transportes->nombre = $request->post('nombre');
        $transportes->razon_social = $request->post('razon_social');
//        $transportes->fecha = $request->post('fecha');
        $transportes->save();

        return redirect()->route("transportes.indext")->with("success", "Actualizado con exito!");
    }

    public function destroyt($id)
    {
        try {
            $transportes = Transporte::findOrFail($id);
            $transportes->delete();
            return redirect()->route('transportes.indext')->with('success', 'El post ha sido eliminado exitosamente.');
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return redirect()->route('transportes.indext')->with('error', 'No se puede eliminar el post debido a una violación de clave foránea.');
            } else {
                return redirect()->route('transportes.indext')->with('error', 'Ocurrió un error al eliminar el post.');
            }
        }
    }
}
