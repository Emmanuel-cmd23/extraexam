@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $cliente->primer_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Apellido:</strong>
                            {{ $cliente->segundo_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Celular:</strong>
                            {{ $cliente->numero_celular }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electronico:</strong>
                            {{ $cliente->correo_electronico }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $cliente->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $cliente->fecha_nacimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
