<?php

namespace App\Containers\AppSection\Root\UI\API\Controllers;

use App\Containers\AppSection\Root\Actions\FindMessageForApiRootVisitorAction;
use App\Containers\AppSection\Root\Actions\FindMessageForApiV1VisitorAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function apiRoot(): JsonResponse
    {
        $message = app(FindMessageForApiRootVisitorAction::class)->run();
        return response()->json($message);
    }

    public function v1ApiLandingPage(): JsonResponse
    {
        $message = app(FindMessageForApiV1VisitorAction::class)->run();
        return response()->json($message);
    }
}
