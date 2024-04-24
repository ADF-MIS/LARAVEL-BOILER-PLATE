<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    protected function unauthenticated($request, AuthenticationException $exception): JsonResponse
    {
        Log::error($exception->getMessage());
        if (! $request->expectsJson()) {
            return route('login');
        }
        return response()->json([
            'message' => 'Unauthenticated',
        ], 401);
    }

    public function register(): void
    {
        $this->renderable(function (Throwable $e) {
            Log::error($e->getMessage());
            if ($e instanceof AuthenticationException) {
                return response()->json([
                    'message' => 'Unauthenticated'
                ], 401);
            } else {
                return response([
                    'message' => "Oops, an error has occurred, we'll be up and running shortly. if you need immediate help, please call us"
                ], 500);
            }
        });
    }
}
