<?php
namespace App\Containers\AppSection\Reporte\Exports;


use App\Containers\AppSection\Categoria\Models\Categoria;
use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Orden\Models\Orden;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;


class ConteoExamensExport implements
    WithEvents,
    WithDrawings
{
    private Collection $datos;
    // private $plantilla;
    private $plantillaLoaded = false;


    public function __construct($datos)
    {
        $this->datos = $datos;
        // $this->plantilla = $plantilla;
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('logo-laboratorio.png'));
        $drawing->setHeight(400);
        $drawing->setWidth(650);
        $drawing->setOffsetY(5);
        $drawing->setOffsetX(50);

        // $drawing->setCoordinates('B1');

        return $drawing;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                // Cargar plantilla solo una vez
                $sheet = $event->sheet;

                // Add a title
                $sheet->mergeCells('A5:C5');
                $sheet->setCellValue('A5', 'UNIDAD DE RED DE LABORATORIOS -OADyLSP-DMyGS-DIRIS L.S.');
                $event->sheet->getDelegate()->getStyle('A5:C5')->applyFromArray([
                    'font' => [
                        'bold' => true, // Negrita
                        'size' => 13, // Negrita
                        'underline' => \PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_SINGLE, // Subrayad
                    ],
                    'alignment' => [
                        'horizontal' => 'center', // Centrar horizontalmente
                        'vertical' => 'center'
                    ],
                ]);
                $event->sheet->getDelegate()->getStyle('A5:C5')->getAlignment()->setWrapText(true);

                $sheet->mergeCells('A7:C7');
                $sheet->setCellValue('A7', 'INFORME ESTADISTICO DE LA PRODUCCIÓN DE ACTIVIDADES Y ANALISIS CLINICOS DE LABORATORIO');
                $event->sheet->getDelegate()->getStyle('A7:C7')->applyFromArray([
                    'font' => [
                        'bold' => true, // Negrita
                        'size' => 12, // Negrita
                    ],
                    'alignment' => [
                        'horizontal' => 'center', // Centrar horizontalmente
                        'vertical' => 'center'
                    ],
                ]);
                $event->sheet->getDelegate()->getStyle('A7:C7')->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getRowDimension('7')->setRowHeight(50);

                // Add the date
                $sheet->mergeCells('A9:C9');
                $sheet->setCellValue('A9', 'Fecha: ' . now()->format('d-m-Y'));

                $row = 12; // Suponiendo que la primera fila contiene títulos
                foreach (Categoria::get()->toArray() as $categoria) {
                    $totalXcategoria = 0;
                    // $event->sheet->getDelegate()->mergeCells('A' . $row . ':C' . $row);
                    $event->sheet->getDelegate()->setCellValue('A' . $row, 'N°');
                    $event->sheet->getDelegate()->setCellValue('B' . $row, $categoria['nombre']);
                    $event->sheet->getDelegate()->setCellValue('C' . $row, 'Total');
                    $event->sheet->getDelegate()->getStyle('A' . $row . ':C' . $row)->applyFromArray([
                        'font' => [
                            'bold' => true, // Negrita
                        ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                            'color' => ['argb' => 'FFCCCCCC']
                        ],
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                'color' => ['argb' => 'FF000000']
                            ]
                        ],
                        'alignment' => [
                            'horizontal' => 'center', // Centrar horizontalmente
                            'vertical' => 'center'
                        ],
                    ]);
                    $datosfiltrados = $this->datos->filter(function (Examen $examen) use ($categoria) {
                        return $examen->categoria_id === $categoria['id'];
                    });
                    $row++;
                    foreach ($datosfiltrados->toArray() as $key => $datos) {

                        $totalXcategoria = $totalXcategoria + (int) $datos['ordens_count'];
                        $event->sheet->getDelegate()->setCellValue('A' . $row, $key + 1);
                        $event->sheet->getDelegate()->setCellValue('B' . $row, $datos['nombre']);
                        $event->sheet->getDelegate()->setCellValue('C' . $row, $datos['ordens_count']);

                        $event->sheet->getDelegate()->getStyle('A' . $row . ':C' . $row)->applyFromArray([
                            'font' => [
                                'size' => 9
                            ],
                            'borders' => [
                                'allBorders' => [
                                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                    'color' => ['argb' => 'FF000000']
                                ]
                            ]
                        ]);

                        $event->sheet->getDelegate()->getStyle('A' . $row)->applyFromArray([
                            'alignment' => [
                                'horizontal' => 'center', // Centrar horizontalmente
                                'vertical' => 'center'
                            ],
                        ]);
                        $event->sheet->getDelegate()->getStyle('C' . $row)->applyFromArray([
                            'alignment' => [
                                'horizontal' => 'center', // Centrar horizontalmente
                                'vertical' => 'center'
                            ],
                        ]);
                        $row++;
                    }
                    $event->sheet->getDelegate()->setCellValue('A' . $row, '');
                    $event->sheet->getDelegate()->setCellValue('B' . $row, "Total de pruebas ({$categoria['nombre']})");
                    $event->sheet->getDelegate()->setCellValue('C' . $row, $totalXcategoria);
                    $event->sheet->getDelegate()->getStyle('A' . $row . ':C' . $row)->applyFromArray([
                        'font' => [
                            'bold' => true, // Negrita,
                        ],
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                'color' => ['argb' => 'FF000000']
                            ]
                        ],
                        'alignment' => [
                            'horizontal' => 'center', // Centrar horizontalmente
                            'vertical' => 'center'
                        ],
                    ]);
                    $row++;
                    $row++;
                    $row++;

                    $event->sheet->getDelegate()->getColumnDimension('A')->setAutoSize(true);
                    $event->sheet->getDelegate()->getColumnDimension('B')->setAutoSize(true);
                    $event->sheet->getDelegate()->getColumnDimension('C')->setAutoSize(true);

                }

            },
        ];
    }
}
