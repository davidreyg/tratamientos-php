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
    @page {
        margin: 4cm 0.5cm 4cm 0.5cm;
    }

    #header {
        position: fixed;
        top: -4cm;
        left: 0cm;
        /* right: 0px; */
        /* height: 50px; */
        /* background-color: yellow; */
    }


    body {
        font-size: 10px;
    }

    #main {
        /* background-color: yellowgreen; */
    }

    #footer {
        position: fixed;
        bottom: -4cm;
        left: 0cm;
        /* right: 0px; */
        height: 4cm;
        width: 100%;
        /* background-color: red; */
        /* padd-bottom: 10px */
    }
</style>

<body>
    <div id="header">
        {{-- IMAGEN Y NOMBRE DEL ESTABLECIMIENTO --}}
        <table class="table" width="100%" class="mt-2">
            <thead>
                <tr>
                    <th style="width: 75%"><img src="{{ public_path('cabecera.png') }}" alt="Company Logo"
                            style=" width: 95%"> </th>
                    <th style="width: 25%" class="align-middle">{{ strtoupper($orden->establecimiento->nombre) }}
                    </th>
                </tr>
            </thead>

        </table>
        {{-- DATOS DEL PACIENTE Y DE LA ORDEN --}}
        <table width="100%" class="mt-3">
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
        <table class="" width="100%">
            <thead>
                <tr>
                    <th scope="col" style="width: 160px" class="text-left">Análisis Clinico</th>
                    <th scope="col" style="width: 60px" class="text-center">Resultado </th>
                    <th scope="col" style="width: 60px" class="text-center">Unidad</th>
                    <th scope="col" style="width: 60px" class="text-center">Rango de Referencia</th>
                </tr>
            </thead>
        </table>
    </div>
    <div id="footer">
        <div style="position: absolute; bottom: 1cm;">
            <span class="text-left"><span class="fw-bold">Analista: </span> {{ $orden->user->nombre_completo }}</span>
        </div>
    </div>
    <div class="container" id="main">
        <div class="fw-bold">
            <table class="table" width="100%">
                @foreach ($categorias as $categoria)
                    <div class="">{{ $categoria->nombre }}</div>

                    <tbody class="fw-normal">
                        @foreach ($orden->examens as $examen)
                            @if ($examen->categoria_id === $categoria->id && !$examen->items->isNotEmpty())
                                <tr>
                                    <td style="width: 160px" class="text-left">{{ $examen->nombre }}</td>
                                    <td style="width: 60px" class="text-center">{{ $examen->pivot->resultado }}
                                    </td>
                                    <td style="width: 60px" class="text-center">
                                        @foreach ($examen->unidads as $unidad)
                                            @if ($unidad->id == $examen->pivot->unidad_id)
                                                {{ $unidad->nombre }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td style="width: 60px" class="text-center">
                                        @foreach ($examen->unidads as $unidad)
                                            @if ($unidad->id == $examen->pivot->unidad_id)
                                                {{ $unidad->pivot->minimo }} - {{ $unidad->pivot->maximo }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <br />
                            @elseif($examen->categoria_id === $categoria->id && $examen->items->isNotEmpty())
                                <tr>
                                    <td style="width: 160px" class="text-left">{{ $examen->nombre }}</td>
                                </tr>
                                @foreach ($orden->items as $item)
                                    <tr class="fst-italic">
                                        @if ($item->examen_id == $examen->id)
                                            <td style="width: 160px;padding-left: 0.8rem" class="text-left">
                                                <li>{{ $item->nombre }}</li>
                                            </td>
                                            <td style="width: 60px" class="text-center">
                                                @if ($item->tipo === 'respuesta')
                                                    @foreach ($item->respuestas as $respuesta)
                                                        @if ($respuesta->id == $item->item_orden->respuesta_id)
                                                            {{ $respuesta->nombre }}
                                                        @endif
                                                    @endforeach
                                                @else
                                                    {{ $item->item_orden->resultado }}
                                                @endif
                                            </td>
                                            <td style="width: 60px" class="text-center">
                                                @foreach ($item->unidads as $unidad)
                                                    @if ($unidad->id == $item->item_orden->unidad_id)
                                                        {{ $unidad->nombre }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td style="width: 60px" class="text-center">
                                                @foreach ($item->unidads as $unidad)
                                                    @if ($unidad->id == $item->item_orden->unidad_id)
                                                        @if ($unidad->pivot->tipo === 'multivalor')
                                                            {{ $unidad->pivot->minimo }} -
                                                            {{ $unidad->pivot->maximo }}
                                                        @elseif ($unidad->pivot->tipo === 'operador')
                                                            {{ $unidad->pivot->operador }}
                                                            {{ $unidad->pivot->minimo }}
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach
                        <br />
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>


</body>

</html>
