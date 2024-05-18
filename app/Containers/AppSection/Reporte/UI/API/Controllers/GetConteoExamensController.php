<?php

namespace App\Containers\AppSection\Reporte\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Examen\UI\API\Transformers\ExamenTransformer;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Containers\AppSection\Reporte\Exports\ConteoExamensExport;
use App\Containers\AppSection\Reporte\UI\API\Requests\GetConteoExamensRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Database\Eloquent\Builder;
use Prettus\Repository\Exceptions\RepositoryException;
use Storage;

class GetConteoExamensController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getConteo(GetConteoExamensRequest $request)
    {
        $examens = Examen::where('is_active', 1)->withCount([
            'ordens' => function (Builder $query) use ($request) {
                $query
                    ->leftJoin('users', 'ordens.user_id', '=', 'users.id')
                    ->leftJoin('establecimientos', 'users.establecimiento_id', '=', 'establecimientos.id')
                    ->where('estado', Orden::VERIFICADO)
                    ->where('examen_orden.is_canceled', 0)
                    ->whereDate('examen_orden.fecha_resultado', '>=', $request->fecha_inicio)
                    ->whereDate('examen_orden.fecha_resultado', '<=', $request->fecha_fin)
                ;
                if (!empty ($request->ris)) {
                    $query->where('establecimientos.ris', '=', $request->ris);
                }
                if (!empty ($request->establecimiento_id)) {
                    $query->where('users.establecimiento_id', '=', $request->establecimiento_id);
                }
            }
        ])->get();
        return $this->transform($examens, ExamenTransformer::class);
    }

    public function exportToExcel()
    {
        $examens = Examen::withCount([
            'ordens' => function ($query) {
                $query
                    ->where('estado', Orden::VERIFICADO)
                    ->where('examen_orden.is_canceled', 0)
                ;
            }
        ])->get();
        $fileName = 'conteo_examenes.xlsx';
        return \Maatwebsite\Excel\Facades\Excel::download(
            new ConteoExamensExport($examens),
            $fileName
        );

    }
}
