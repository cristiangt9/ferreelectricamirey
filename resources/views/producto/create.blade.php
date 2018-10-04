@extends('layouts.productos')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Producto</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('productos.store') }}">
                        @csrf

                        <div class="form-group row">
        {{-- *********************Nombre************************************ --}}
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

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
                                <input id="codigo" type="text" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" value="{{ old('codigo') }}" required>

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
                                <input id="descripcion" type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}" required>

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
                                <input id="stock" type="number" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" value="0" required>

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
                                <input id="departamento" type="text" class="form-control{{ $errors->has('telefono_id') ? ' is-invalid' : '' }}" name="departamento" value="" required>

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
                                <input id="marca" type="text" class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}" name="marca" required>

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
                                <input id="solicitud_en_cero" type="number" class="form-control{{ $errors->has('passolicitud_en_cero') ? ' is-invalid' : '' }}" name="solicitud_en_cero" value=0>

                                @if ($errors->has('solicitud_en_cero'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('solicitud_en_cero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Palabras clave************************************ --}}
                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Palabras clave </label>
                            <div class="col-md-6">
                                <select name="tags[]" class="select2" multiple="multiple" data-placeholder="Seleccione una o varias Palabras" style="width: 100%;"> 
                                  @foreach($tags as $tag)
                                    <option {{ collect(old('tags'))->contains($tag->id) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->nombre}}</option>
                                  @endforeach
                                </select>
                                <div class="text-danger">{!! $errors->first('tags','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
                                    Agregar
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
