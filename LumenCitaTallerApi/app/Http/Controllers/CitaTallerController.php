<?php

namespace App\Http\Controllers;

use App\Models\CitaTaller;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CitaTallerController extends Controller
{

    // Traits
    use ApiResponser;

    public function __construct() {}

    public function index()
    {
        $citas_taller = CitaTaller::all();

        return $this->successResponse($citas_taller);
    }

    public function store(Request $request)
    {
        $rules = [
            'marca_vehiculo_id' => 'required|min:1',
            'title' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $cita_taller = CitaTaller::create($request->all());

        return $this->successResponse($cita_taller, Response::HTTP_CREATED);
    }

    public function show($cita_taller)
    {
        $cita_taller = CitaTaller::findOrFail($cita_taller);

        return $this->successResponse($cita_taller);
    }

    public function update(Request $request, $cita_taller)
    {
        $rules = [
            'marca_vehiculo_id' => 'min:1',
            'title' => 'max:255',
        ];

        $this->validate($request, $rules);

        $cita_taller = CitaTaller::findOrFail($cita_taller);
        $cita_taller->fill($request->all());

        if ($cita_taller->isClean()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $cita_taller->save();

        return $this->successResponse($cita_taller);
    }

    public function destroy($cita_taller)
    {
        $cita_taller = CitaTaller::findOrFail($cita_taller);
        $cita_taller->delete();

        return $this->successResponse($cita_taller);
    }
}
