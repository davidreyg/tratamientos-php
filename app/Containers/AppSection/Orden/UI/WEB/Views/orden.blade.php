<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ public_path('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ public_path('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

</head>
<style>
    body {
        font-size: 10px;
    }
</style>

<body>
    <div class="box cabecera-imagen  mb-2">
        {{-- <div class="col-8"><img src="{{ public_path('cabecera.png') }}" alt="Company Logo" style=" width: 70%"></div>
        <div class="col-4"><div class="col">{{ $orden->establecimiento->nombre }} </div></div> --}}

        <table class="table" width="100%">
            <thead>
                <tr>
                    <th style="width: 75%"><img src="{{ public_path('cabecera.png') }}" alt="Company Logo"
                            style=" width: 95%"> </th>
                    <th style="width: 25%">{{ strtoupper($orden->establecimiento->nombre) }} </th>
                    {{-- <th scope="col"><img src="{{ public_path('cabecera.png') }}" alt="Company Logo" style=" width: 70%"></th> --}}
                </tr>
            </thead>

        </table>
    </div>
    <div class="box">
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
                    <th scope="col" style="width: 160px" class="text-left">Análisis Clinico</th>
                    <th scope="col" style="width: 60px" class="text-center">Resultado </th>
                    <th scope="col" class="text-center">Unidad</th>
                    <th scope="col" class="text-center">Rango de Referencia</th>
                </tr>
            </thead>
        </table>


    </div>
    <div class="box cuepro">
        <br />
        <div class="fw-bold">
            <table width="100%">
                @foreach ($categorias as $categoria)
                    <div class="mb-2">{{ $categoria->nombre }}</div>
                    <tbody class="fw-normal">
                        @foreach ($orden->examens as $examen)
                            @if ($examen->categoria_id == $categoria->id)
                                <tr>
                                    <td style="width: 160px" class="text-left">{{ $examen->nombre }}</td>
                                    <td style="width: 60px" class="text-center">{{ $examen->pivot->resultado }}</td>
                                    <td class="text-center">
                                        @foreach ($examen->unidads as $unidad)
                                            @if ($unidad->id == $examen->pivot->unidad_id)
                                                {{ $unidad->nombre }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="text-center">
                                        @foreach ($examen->unidads as $unidad)
                                            @if ($unidad->id == $examen->pivot->unidad_id)
                                                {{ $unidad->pivot->minimo }} - {{ $unidad->pivot->maximo }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                @endforeach
            </table>
        </div>

    </div>
</body>

</html>
