@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? __('Show') . " " . __('Cliente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $cliente->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion Ip:</strong>
                                    {{ $cliente->direccion_IP }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direcciones Id:</strong>
                                    {{ $cliente->direcciones_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pagos Id:</strong>
                                    {{ $cliente->pagos_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
