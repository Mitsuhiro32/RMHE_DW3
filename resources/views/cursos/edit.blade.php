@include('app')
@include('menu')

<div class="container">
    <h1>Editar Cursos</h1>
    <form action="{{url('/cursos/'.$cursos->id)}}" method="post" enctype="multipart/from-data">
        @csrf
        {{method_field('PATCH')}}
        <label for="nombre">Nombre del curso</label>
			<input type="text" class="form-control" name="nombre" id="nombre" value="{{$cursos->nombre}}">

        <label for="descripcion">Descripcion</label>
			<input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$cursos->descripcion}}">

        <label for="fecha_inicio">Fecha de inicio</label>
			<input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{$cursos->fecha_inicio}}">

        <label for="fecha_fin">Fecha de finalizacion</label>
			<input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{$cursos->fecha_fin}}">

        <label for="estado">Estado</label>
		<input type="text" class="form-control" name="estado" id="estado" value="{{$cursos->estado}}">

        <br>

        <div class="d-flex justify-content-between">
            <input type="submit" class="btn btn-primary" value="Guardar">

            <a href="{{route('alumnos.index')}}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </div>

    </form>
</div>
