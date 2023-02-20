<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{

    protected $levels = [
        //
    ];


    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];


    public function register(): void
    {
        $this->renderable(function (Throwable $exception) {
            if (request()->is('api*')) {
                if ($exception instanceof ModelNotFoundException)
                    return response()->json(
                        ['error' => 'Recurso no encontrado'],
                        404
                    );
                else if ($exception instanceof AuthenticationException)
                    return response()->json(
                        ['error' => 'Usuario no autenticado'],
                        401
                    );
                else if ($exception instanceof ValidationException)
                    return response()->json(
                        ['error' => 'Datos no válidos'],
                        400
                    );
                else if (isset($exception))
                    return response()->json(['error' => 'Error: ' .
                        $exception->getMessage()], 500);
            }
        });
    }
}
