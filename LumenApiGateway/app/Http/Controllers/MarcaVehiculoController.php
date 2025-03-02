<?php

namespace App\Http\Controllers;

use App\Services\MarcaVehiculoService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MarcaVehiculoController extends Controller
{

    // Traits
    use ApiResponser;

    public $marcaVehiculoService;
    
    public function __construct(MarcaVehiculoService $marcaVehiculoService)
    {
        $this->marcaVehiculoService = $marcaVehiculoService;
    }

    public function index()
    {
        return $this->successResponse($this->marcaVehiculoService->obtenerMarcasVehiculos());
    }

    public function store(Request $request)
    {
        return $this->successResponse($this->marcaVehiculoService->crearMarcaVehiculo($request->all()), Response::HTTP_CREATED);
    }

    public function show($marca_vehiculo)
    {
        return $this->successResponse($this->marcaVehiculoService->obtenerMarcaVehiculo($marca_vehiculo));
    }

    public function update(Request $request, $marca_vehiculo)
    {
        return $this->successResponse($this->marcaVehiculoService->actualizarMarcaVehiculo($request->all(), $marca_vehiculo));
    }

    public function destroy($marca_vehiculo)
    {
        return $this->successResponse($this->marcaVehiculoService->eliminarMarcaVehiculo($marca_vehiculo), Response::HTTP_OK);
    }
}
