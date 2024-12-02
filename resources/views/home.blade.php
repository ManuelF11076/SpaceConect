@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="header-title">El Dinero Donde Este Y Si Se Deja Hay Que Agarrarlo</h1>
    <h1 class="header-subtitle"></h1>
    <div class="header-subtitle1-container">
        <h1 class="header-subtitle1">SpaceConect</h1>
    </div>
@stop

@section('css')
    <style>
        /* Estilos para centrar y dar color y tamaño a los títulos */
        .header-title, .header-subtitle {
            text-align: center;
            color: #ededed;
            margin: 0;
        }

        .content-header .header-title {
            font-size: 3rem; !important; /* Forza el tamaño del subtítulo */
        }
        }

        .content-header .header-subtitle {
            font-size: 3.5rem; !important; /* Forza el tamaño del subtítulo */
        }

        /* Centrado específico para .header-subtitle1 */
        .header-subtitle1-container {
            display: flex;
            align-items: center; /* Centra verticalmente */
            justify-content: center; /* Centra horizontalmente */
            min-height: 70vh; /* Ajusta la altura según el espacio deseado */
        }

        .content-header .header-subtitle1 {
            font-size: 8rem !important; /* Forza el tamaño del subtítulo */
            color: #050505;
}


        /* Aplica la imagen de fondo a la sección principal del contenido */
        .content-wrapper {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtjKKlG1AAWbM0sRJpST0W0dG1CqrSWrRHQg&s');
            background-size: cover;
            background-position: small;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

      

        /* Fondo blanco semitransparente para el contenido */
        .content {
            background-color: rgba(255, 255, 255, 0.4);
            padding: 20px;
            border-radius: 8px;
        }

        /* Opcional: Añadir un efecto de superposición */
        .content-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        /* Asegura que el contenido esté encima de la superposición */
        .content, .content-header {
            position: relative;
            z-index: 2;
        }
    </style>
@stop
