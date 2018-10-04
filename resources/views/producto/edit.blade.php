@extends('layouts.productos')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Producto {{ $producto_editar->nombre }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('productos.update',$producto_editar) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
        {{-- *********************Nombre************************************ --}}
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ $producto_editar->nombre }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Código************************************ --}}
                        <div class="form-group row">
                            <label for="codigo" class="col-md-4 col-form-label text-md-right">Código</label>

                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" value="{{ $producto_editar->codigo }}" required>

                                @if ($errors->has('codigo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Descripción************************************ --}}
                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripción</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ $producto_editar->descripcion }}" required>

                                @if ($errors->has('descripcion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Stock************************************ --}}
                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">Stock</label>

                            <div class="col-md-6">
                                <input id="stock" type="number" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" value="{{ $producto_editar->stock }}" required>

                                @if ($errors->has('stock'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Departamento************************************ --}}
                        <div class="form-group row">
                            <label for="departamento" class="col-md-4 col-form-label text-md-right">Departamento</label>

                            <div class="col-md-6">
                                <input id="departamento" type="text" class="form-control{{ $errors->has('telefono_id') ? ' is-invalid' : '' }}" name="departamento" value="{{ $producto_editar->departamento }}" required>

                                @if ($errors->has('departamento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('departamento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Marca************************************ --}}
                        <div class="form-group row">
                            <label for="marca" class="col-md-4 col-form-label text-md-right">Marca</label>

                            <div class="col-md-6">
                                <input id="marca" type="text" class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}" name="marca" value="{{ $producto_editar->marca }}" required>

                                @if ($errors->has('marca'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('marca') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Solicitud sin Stock************************************ --}}
                        <div class="form-group row">
                            <label for="solicitud_en_cero" class="col-md-4 col-form-label text-md-right">Solicitud sin Stock</label>

                            <div class="col-md-6">
                                <input id="solicitud_en_cero" type="number" class="form-control{{ $errors->has('passolicitud_en_cero') ? ' is-invalid' : '' }}" name="solicitud_en_cero" value="{{ $producto_editar->solicitud_en_cero }}" required>

                                @if ($errors->has('solicitud_en_cero'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('solicitud_en_cero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
                                    Guardar Cambios
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
