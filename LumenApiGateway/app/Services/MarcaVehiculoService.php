<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class MarcaVehiculoService{

    use ConsumesExternalService;
    
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.marcas_vehiculos.baseUri');
    }

    public function obtenerMarcasVehiculos(){

        return $this->performRequest('GET', '/marcas_vehiculos');
    }

    public function crearMarcaVehiculo($data){

        return $this->performRequest('POST', '/marcas_vehiculos', $data);
    }

    public function obtenerMarcaVehiculo($marca_vehiculo){

        return $this->performRequest('GET', "/marcas_vehiculos/{$marca_vehiculo}");
    }

    public function actualizarMarcaVehiculo($data, $marca_vehiculo){

        return $this->performRequest('PUT', "/marcas_vehiculos/{$marca_vehiculo}", $data);
    }

    public function eliminarMarcaVehiculo($marca_vehiculo){

        return $this->performRequest('DELETE', "/marcas_vehiculos/{$marca_vehiculo}");
    }


}