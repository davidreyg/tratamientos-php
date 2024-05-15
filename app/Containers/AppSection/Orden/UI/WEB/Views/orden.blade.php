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

    .tabla-orden {
        /* border-left: 0.01em solid #ccc; */
        /* border-right: 0; */
        /* border-top: 0.01em solid #ccc; */
        border-bottom: 0.1rem solid black;
        border-collapse: collapse;
    }

    .tabla-orden th{
        /* border-left: 0; */
        /* border-right: 0.01em solid #ccc; */
        /* border-top: 0; */
        border-top: 0.1rem solid black;
        border-bottom: 0.1rem solid black;
        /* border-left: 0.1rem solid black; */
        /* border-right: 0.1rem solid black; */
    }
    .tabla-orden td,{
        /* border-left: 0; */
        /* border-right: 0.01em solid #ccc; */
        /* border-top: 0; */
        border-bottom: 0.1rem solid grey;
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
                    <td>: {{ $orden->numero_orden }}</td>
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
        <table class="tabla-orden" width="100%">
            <thead>
                <tr>
                    <th scope="col" style="width: 60px" class="text-left">CÓDIGO</th>
                    <th scope="col" style="width: 160px" class="text-center">EXAMEN </th>
                    <th scope="col" style="width: 60px" class="text-end">PRECIO</th>
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
        <table class="table tabla-orden" width="100%">

            <tbody class="fw-normal">
                @foreach ($orden->examens as $examen)
                    <tr>
                        <td style="width: 60px" class="text-left">{{ $examen->codigo }}</td>
                        <td style="width: 160px" class="text-left">{{ $examen->nombre }}</td>
                        <td style="width: 60px" class="text-end">S/. {{ $examen->precio }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table" width="100%">
            <tbody>
                <tr>
                    <td style="width: 60px" class="text-left"></td>
                    <td style="width: 160px" class="text-end fw-bold">SUBTOTAL:</td>
                    <td style="width: 60px" class="text-end">S/. {{ $orden->getTotal()['subTotal'] }}</td>
                </tr>
                <tr>
                    <td style="width: 60px" class="text-left"></td>
                    <td style="width: 160px" class="text-end fw-bold">IGV (18%):</td>
                    <td style="width: 60px" class="text-end">S/. {{ $orden->getTotal()['IGV'] }}</td>
                </tr>
                <tr>
                    <td style="width: 60px" class="text-left"></td>
                    <td style="width: 160px" class="text-end fw-bold">TOTAL:</td>
                    <td style="width: 60px" class="text-end">S/. {{ $orden->getTotal()['total'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>


</body>

</html>
