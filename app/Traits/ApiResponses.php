<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponses
{
    protected function httpOk($data = null)
    {
        return response()->json($data, Response::HTTP_OK);
    }
}
