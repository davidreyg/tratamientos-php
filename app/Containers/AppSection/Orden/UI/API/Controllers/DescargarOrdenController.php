<?php

namespace App\Containers\AppSection\Orden\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Containers\AppSection\Orden\UI\API\Requests\DescargarOrdenRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Barryvdh\DomPDF\Facade\Pdf;

class DescargarOrdenController extends ApiController
{
    /**
     * @param DescargarOrdenRequest $request
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateOrden(DescargarOrdenRequest $request)
    {
        $orden = Orden::findOrFail($request->id);
        // Supongamos que $orden es la instancia de la Orden de la que deseas obtener las categorías de exámenes
        $categorias = $orden->examens()->with('categoria')->get()->pluck('categoria');

        // Si deseas obtener una colección única de categorías, puedes hacerlo así
        $categoriasUnicas = $categorias->unique('id');

        // Si necesitas trabajar con un array de las categorías en lugar de una colección de Eloquent
        // $categoriasArray = $categoriasUnicas->toArray();
        // return $categoriasUnicas;
        $data = ['categorias' => $categoriasUnicas, 'orden' => $orden];
        $pdf = Pdf::loadView('appSection@orden::orden', $data)
            ->setPaper('a5');
        return response($pdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="orden.pdf"',
        ]);
    }
}
