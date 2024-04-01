<?php
namespace App\Containers\AppSection\Reporte\Exports;


use App\Containers\AppSection\Examen\Models\Categoria;
use App\Containers\AppSection\Examen\Models\Examen;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;


class ConteoExamensExport implements FromCollection, WithHeadings, WithEvents, ShouldAutoSize
{
    private Collection $datos;
    // private $plantilla;
    private $plantillaLoaded = false;


    public function __construct($datos)
    {
        $this->datos = $datos;
        // $this->plantilla = $plantilla;
    }


    public function collection()
    {
        return collect([]);
        // return $this->datos->map(function (Examen $examen) {
        //     return [
        //         'nombre' => $examen->nombre,
        //         'cantidad' => $examen->ordens_count,
        //     ];
        // });
    }

    public function headings(): array
    {
        return [];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                // Cargar plantilla solo una vez
                if (!$this->plantillaLoaded) {
                    $this->loadPlantilla($event->sheet);
                    $this->plantillaLoaded = true;
                }
                $row = 9; // Suponiendo que la primera fila contiene títulos
                foreach (Categoria::get()->toArray() as $datos) {
                    $event->sheet->setCellValueByColumnAndRow(1, $row, $datos['nombre']);
                    $datosfiltrados = $this->datos->filter(function (Examen $examen) use ($datos) {
                        return $examen->categoria_id === $datos['id'];
                    });
                    $row++;
                    foreach ($datosfiltrados->toArray() as $datos) {
                        $event->sheet->setCellValueByColumnAndRow(1, $row, $datos['nombre']);
                        $event->sheet->setCellValueByColumnAndRow(2, $row, $datos['ordens_count']);
                        $row++;
                    }

                }

            },
        ];
    }

    public function loadPlantilla($sheet)
    {
        // Ruta de la plantilla
        $plantillaPath = storage_path('app/public/Templates/Excel/template_conteo.xlsx');

        // Cargar plantilla
        $reader = new Xlsx();
        $spreadsheet = $reader->load($plantillaPath);

        // Copiar el contenido de la plantilla
        // $sheet->setTitle('Sheet'); // Cambiar el nombre de la hoja si es necesario
        $sheet->setAutoFilter(null);
        // $sheet->mergeCells('A1:H1'); // Ajustar las celdas fusionadas si es necesario
        foreach ($spreadsheet->getActiveSheet()->getRowIterator() as $row) {
            foreach ($row->getCellIterator() as $cell) {
                $sheet->setCellValue($cell->getCoordinate(), $cell->getValue());
            }
        }
    }

    // public function toResponse($request)
    // {
    //     return response()->stream(function () {
    //         $this->export();
    //     }, 200, [
    //         'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    //         'Content-Disposition' => 'attachment; filename="datos.xlsx"',
    //     ]);
    // }

    // private function export()
    // {
    //     Excel::raw(new self($this->datos), \Maatwebsite\Excel\Excel::XLSX);
    // }
}
