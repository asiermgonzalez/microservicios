<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class CitaTallerService{

    use ConsumesExternalService;
    
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.citas_taller.baseUri');
    }

    public function obtenerCitasTaller(){

        return $this->performRequest('GET', '/citas_taller');
    }

    public function crearCitaTaller($data){

        return $this->performRequest('POST', '/citas_taller', $data);
    }

    public function obtenerCitaTaller($cita_taller){

        return $this->performRequest('GET', "/citas_taller/{$cita_taller}");
    }

    public function actualizarCitaTaller($data, $cita_taller){

        return $this->performRequest('PUT', "/citas_taller/{$cita_taller}", $data);
    }

    public function eliminarCitaTaller($cita_taller){

        return $this->performRequest('DELETE', "/citas_taller/{$cita_taller}");
    }


}