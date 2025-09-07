<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return response()->json([
            'message' => 'Hello Login :)',
        ], Response::HTTP_OK);
    }
}
