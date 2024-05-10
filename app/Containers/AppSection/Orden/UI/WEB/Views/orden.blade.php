<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ public_path('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ public_path('css/bootstrap.css') }}" rel="stylesheet">

</head>
<style>
    body {
        font-size: 10px;
    }
</style>

<body>
    <div class="box has-background-info">
        <table class="table  table-bordered border-primary cabecera" width="100%">
            <thead>
                <tr>
                    <th scope="col" class="has-text-right" style="min-width: 100px"></th>
                    <th scope="col" style="min-width: 100px"></th>
                    {{-- <th scope="col" style="width: 100px"></th> --}}
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">N° de Orden</th>
                    <td>: {{ $orden->codigo_atencion }}</td>
                    {{-- <td></td> --}}
                    <th scope="row">Historia Clínica</th>
                    <td>: {{ $orden->paciente->historia_clinica }}</td>
                </tr>
                <tr>
                    <th scope="row">Paciente</th>
                    <td>: {{ $orden->paciente->apellido_paterno }} {{ $orden->paciente->apellido_materno }},
                        {{ $orden->paciente->nombres }}</td>
                    {{-- <td></td> --}}
                    <th scope="row">Prioridad</th>
                    <td>: </td>
                </tr>
                <tr>
                    <th scope="row">Edad</th>
                    <td>: {{ $orden->paciente->edad }} años</td>
                    <th scope="row">Fecha Informe</th>
                    <td>: {{ $orden->fecha_registro }} </td>
                </tr>
                <tr>
                    <th scope="row">N° de Documento</th>
                    <td>: {{ $orden->paciente->numero_documento }}</td>
                    <th scope="row">Medico</th>
                    <td>: {{ $orden->medico }} </td>
                </tr>
            </tbody>
        </table>
        <br />
        <table width="100%">
            <thead>
                <tr>
                    <th scope="col">Análisis Clinico</th>
                    <th scope="col">Resultado </th>
                    <th scope="col">Unidad</th>
                    <th scope="col">Rango de Referencia</th>
                    <th scope="col">Método</th>
                </tr>
            </thead>
        </table>
        <br />
        <div class="fw-bold">
            @foreach ($categorias as $categoria)
                <div class="mb-2">{{ $categoria->nombre }}</div>
                @foreach ($orden->examens as $examen)
                    @if ($examen->categoria_id == $categoria->id)
                        <li class="fw-normal">{{ $examen->nombre }}</li>
                    @endif
                @endforeach
            @endforeach
        </div>

    </div>
</body>

</html>
