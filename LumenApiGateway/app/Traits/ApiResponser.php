<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{

    // Respuestas de éxito
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    // Respuestas de error
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

      // Mensajes de error
      public function errorMessage($message, $code)
      {
        return response($message, $code)->header('Content-Type', 'application/json');
      }
}
