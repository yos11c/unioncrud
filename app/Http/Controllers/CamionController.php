<?php

namespace App\Http\Controllers;
use App\Models\Camion;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


use Illuminate\Support\Facades\Redirect;

use function GuzzleHttp\Promise\all;

class CamionController extends Controller
{
    protected $connection= 'transportes';
    public function indexc()
    {

        $datos = Camion::orderBy('id', 'asc')->paginate(3);
        return view('inicio-camion', compact('datos'));
    }

    public function createc()
    {
        //el formulario donde nosotros agregamos datos
        return view('agregar-camion');
    }

    public function storec(Request $request)
    {
        try {
            $validateData =validator::make ($request->all(),[
                'id' => 'required|integer',
                'placa_camion' => 'required|string',
                'marca' => 'required|string ',
                'color' => 'required|string',
                'modelo ' => 'required|string',
                'capacidad_toneladas ' => 'required|string ',
                'transporte_codigo' => 'required|exists:transportes.id',


            ])->safe()->all();

            //Sirve para guardar datos en la base de datos
            $camiones = new Camion();
            $camiones->id = $validateData['id'];
            $camiones->placa_camion = $validateData['placa_camion'];
            $camiones->marca = $validateData['marca'];
            $camiones->color = $validateData['color'];
            $camiones->modelo = $validateData['modelo'];
            $camiones->capacidad_toneladas = $validateData['capacidad_toneladas'];
            $camiones->transporte_codigo = $validateData['transportes_codigo'];
            $camiones->save();

            return redirect()->back()->with('success', ' creada correctamente');
        } catch (QueryException $e) {
            if ($e->getCode() === '22003') {
                // Error 22003: Valor numérico fuera de rango
                return redirect()->back()->with('error', 'Error al crear camiones: Valor de transporte fuera de rango');
            } else {
                // Otro error de clave foránea o error de base de datos
                return redirect()->back()->with('error', 'error de base de datos : ' . $e->getMessage());
            }
        } catch (\Exception $e) {
            // Capturar excepción general
            // Manejar cualquier otro tipo de excepción que pueda ocurrir
            return redirect()->back()->with('error', 'Error de otro tipo fuera del crud publicación: ' . $e->getMessage());
        }
    }




    public function showc($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $camiones = Camion::find($id);
        return view("eliminar-camion", compact('camiones'));
    }

    public function editc($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $camiones = Camion::find($id);
        return view("actualizar-camion", compact('camiones'));
        //echo $id;
    }

    public function updatec(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $camiones = Camion::find($id);
        $camiones->id = $request->post('id');
        $camiones->placa_camion = $request->post('placa_camion');
        $camiones->marca = $request->post('marca');
        $camiones->color = $request->post('color');
        $camiones->modelo = $request->post('modelo');
        $camiones->capacidad_toneladas = $request->post('capacidad_toneladas');
        $camiones->transporte_codigo = $request->post('transporte_codigo');
        $camiones->save();

        return redirect()->route("camiones.indexc")->with("success", "Actualizado con exito!");
    }

    public function destroyc($id)
    {
        //Elimina un registro
        $camiones = Camion::find($id);
        $camiones->delete();
        return redirect()->route("camiones.indexc")->with("success", "Eliminado con exito!");
    }



}
