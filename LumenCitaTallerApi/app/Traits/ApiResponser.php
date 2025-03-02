<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{

    // Respuestas de éxito
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data], $code);
    }

    // Respuestas de error
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}
