<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Traits\ApiResponses;

class AuthController extends Controller
{
    use ApiResponses;

    public function login(ApiLoginRequest $request)
    {
        dd(
            'Email', $request->email,
            'Password', $request->password,
        );

        return $this->httpOk([
            'message' => 'Hello Login :)',
        ]);
    }
}
