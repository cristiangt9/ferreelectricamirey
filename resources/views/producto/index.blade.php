@extends('layouts.productos')

@section('content')
	<div class="container">
		
	Productos
	<p>Esta sección se podra ver y consultar los productos de la base de datos</p>
	<br>
	@if($productos->count())
		
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nombre</th>
						<th>Descripción </th>
						<th>Existencia</th>
						<th>Departamento</th>
						<th>Marca</th>
						<th>Solicitud en Cero</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($productos as $producto)
						<tr>
							<td>{{$producto->codigo}}</td>
							<td>{{$producto->nombre}}</td>
							<td>{{$producto->descripcion}}</td>
							<td>{{$producto->stock}}</td>
							<td>{{$producto->departamento}}</td>
							<td>{{$producto->marca}}</td>
							<td>{{$producto->solicitud_en_cero}}</td>
							<td><a title="Ver" class="btn btn-success btn-sm"href="{{route('productos.show',$producto)}}"><i class="fas fa-eye"></i></a> <a title="Editar"class="btn btn-primary btn-sm"href="{{route('productos.edit', $producto)}}"><i class="far fa-edit"></i></a><form style="display:inline" method="POST" action="{{ route('productos.destroy', $producto->id)}}"> 
		                      @csrf
		                      @method('DELETE')

		                    	<button title="Eliminar" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de querer eliminar esta publicación?')" type="submit"><i class="fa fa-trash-alt"></i></button>
                    			</form> 
                			</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			
			<br>
		
	@else
		No hay Productos en Existencia
	@endif	
	<br>
	<a type="button" class="btn btn-primary" href="{{route('productos.create')}}"> Agregar Producto</a>
	</div>
	
@endsection