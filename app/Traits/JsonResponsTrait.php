<?php

namespace App\Traits;

trait JsonResponsTrait
{
    public function successResponse($message = "Request was successful", $code = 200, $data = [])
    {
        return response()->json([
            'status' => 'success',
            'ok' => true,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    private function errorResponse($message = "An error occurred", $code = 400, $data = [])
    {
        return response()->json([
            'status' => 'error',
            'ok' => false,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    public function notFoundResponse($message = "Resource not found")
    {
        return $this->errorResponse($message, 404);
    }

    public function validationErrorResponse($message = "Validation error", $errors = [])
    {
        return $this->errorResponse($message, 422, $errors);
    }

    public function unauthorizedResponse($message = "Unauthorized access")
    {
        return $this->errorResponse($message, 401);
    }

    public function forbiddenResponse($message = "Forbidden access")
    {
        return $this->errorResponse($message, 403);
    }

    public function serverErrorResponse($message = "Internal server error")
    {
        return $this->errorResponse($message, 500);
    }
}
