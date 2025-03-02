<?php

namespace App\Http\Controllers;

use App\Services\CitaTallerService;
use App\Services\MarcaVehiculoService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CitaTallerController extends Controller
{

    // Traits
    use ApiResponser;

    public $citaTallerService;

    public $marcaVehiculoService;

    public function __construct(CitaTallerService $citaTallerService, MarcaVehiculoService $marcaVehiculoService)
    {
        $this->citaTallerService = $citaTallerService;
        $this->marcaVehiculoService = $marcaVehiculoService;
    }

    public function index()
    {
        return $this->successResponse($this->citaTallerService->obtenerCitasTaller());
    }

    public function store(Request $request)
    {
        // Comprobar que existe la marca del vehículo
        $this->marcaVehiculoService->obtenerMarcaVehiculo($request->marca_vehiculo_id);

        return $this->successResponse($this->citaTallerService->crearCitaTaller($request->all()), Response::HTTP_CREATED);
    }

    public function show($cita_taller)
    {
        return $this->successResponse($this->citaTallerService->obtenerCitaTaller($cita_taller));
    }

    public function update(Request $request, $cita_taller)
    {
        return $this->successResponse($this->citaTallerService->actualizarCitaTaller($request->all(), $cita_taller));
    }

    public function destroy($cita_taller)
    {
        return $this->successResponse($this->citaTallerService->eliminarCitaTaller($cita_taller), Response::HTTP_OK);
    }
}
