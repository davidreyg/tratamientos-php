<?php

namespace App\Containers\AppSection\Paciente\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Paciente\Actions\FindPacienteByIdAction;
use App\Containers\AppSection\Paciente\UI\API\Requests\FindReniecRequest;
use App\Ship\Exceptions\InternalErrorException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use GuzzleHttp\Utils;
use Http;

class FindReniecController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findReniec(FindReniecRequest $request)
    {
        $response = Http::withOptions([
            'verify' => false,
        ])
            ->withHeaders(['Authorization' => 'token eed63ab26117dacf4986f37ca1e61c4ccafc2aea'])
            ->get('https://38.43.129.230/api/web-service/person-complete/' . $request->dni);
        // dd($response);
        $content = Utils::jsonDecode($response, true);
        if (is_array($content)) {
            # code...
            if (array_key_exists('id', $content)) {
                return $this->json(['data' => $content]);
            } else {
                throw new NotFoundException("No se encontro al ciudadano");

            }
        } else {
            return throw new InternalErrorException("Servicio no disponible por el momento.");
        }
    }
}
