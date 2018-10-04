@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
        {{-- *********************Nombre************************************ --}}
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************E-Mail************************************ --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Tipo************************************ --}}
                        <div class="form-group row">
                            <label for="tipo" class="col-md-4 col-form-label text-md-right">Tipo</label>

                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control{{ $errors->has('tipo') ? ' is-invalid' : '' }}" name="tipo" value="Administrador" required>

                                @if ($errors->has('tipo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Direccion************************************ --}}
                        <div class="form-group row">
                            <label for="direccion_id" class="col-md-4 col-form-label text-md-right">Dirección</label>

                            <div class="col-md-6">
                                <input id="direccion_id" type="text" class="form-control{{ $errors->has('direccion_id') ? ' is-invalid' : '' }}" name="direccion_id" value="1" required>

                                @if ($errors->has('direccion_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('direccion_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Teléfono************************************ --}}
                        <div class="form-group row">
                            <label for="telefono_id" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                            <div class="col-md-6">
                                <input id="telefono_id" type="text" class="form-control{{ $errors->has('telefono_id') ? ' is-invalid' : '' }}" name="telefono_id" value="1" required>

                                @if ($errors->has('telefono_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        {{-- *********************Contraseña************************************ --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
