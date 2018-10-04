@extends('layouts.productos')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ver Producto {{ $producto->nombre }}</div>

                <div class="card-body">

                        <div class="form-group row">
        {{-- *********************Nombre************************************ --}}
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre:</label>
                            <div class="col-md-6">
                                {{ $producto->nombre }}
                            </div>
                        </div>
        {{-- *********************Código************************************ --}}
                        <div class="form-group row">
                            <label for="codigo" class="col-md-4 col-form-label text-md-right">Código:</label>

                            <div class="col-md-6">
                                {{ $producto->codigo }}
                            </div>
                        </div>
        {{-- *********************Descripción************************************ --}}
                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripción:</label>

                            <div class="col-md-6">
                                {{ $producto->descripcion }}
                            </div>
                        </div>
        {{-- *********************Stock************************************ --}}
                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">Stock:</label>

                            <div class="col-md-6">
                                {{ $producto->stock }}
                            </div>
                        </div>
        {{-- *********************Departamento************************************ --}}
                        <div class="form-group row">
                            <label for="departamento" class="col-md-4 col-form-label text-md-right">Departamento:</label>

                            <div class="col-md-6">
                                {{ $producto->departamento }}
                            </div>
                        </div>
        {{-- *********************Marca************************************ --}}
                        <div class="form-group row">
                            <label for="marca" class="col-md-4 col-form-label text-md-right">Marca:</label>

                            <div class="col-md-6">
                                {{ $producto->marca }}
                            </div>
                        </div>
        {{-- *********************Solicitud sin Stock************************************ --}}
                        <div class="form-group row">
                            <label for="solicitud_en_cero" class="col-md-4 col-form-label text-md-right">Solicitud sin Stock:</label>

                            <div class="col-md-6">
                                {{ $producto->solicitud_en_cero }}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
