<?php

namespace App\Http\Controllers;

use App\Models\MarcaVehiculo;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MarcaVehiculoController extends Controller
{
    // Traits
    use ApiResponser;

    public function __construct() {}

    public function index()
    {

        $marcas_vehiculos = MarcaVehiculo::all();

        return $this->successResponse($marcas_vehiculos);
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $marca_vehiculo = MarcaVehiculo::create($request->all());

        return $this->successResponse($marca_vehiculo, Response::HTTP_CREATED);
    }

    public function show($marca_vehiculo)
    {
        $marca_vehiculo = MarcaVehiculo::findOrFail($marca_vehiculo);

        return $this->successResponse($marca_vehiculo);
    }

    public function update(Request $request, $marca_vehiculo)
    {
        $rules = [
            'name' => 'max:255',
        ];

        $this->validate($request, $rules);

        $marca_vehiculo = MarcaVehiculo::findOrFail($marca_vehiculo);
        $marca_vehiculo->fill($request->all());

        if ($marca_vehiculo->isClean()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $marca_vehiculo->save();

        return $this->successResponse($marca_vehiculo);
    }

    public function destroy($marca_vehiculo)
    {
        $marca_vehiculo = MarcaVehiculo::findOrFail($marca_vehiculo);
        $marca_vehiculo->delete();

        return $this->successResponse($marca_vehiculo);
    }
}
