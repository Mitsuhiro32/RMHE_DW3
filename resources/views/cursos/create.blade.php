@include('app')
@include('menu')

<div class="container">
    @if (count($errors) > 0)
        <br>
        <div class="alert alert-danger" role="alert">
            <u>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </u>
        </div>
    @endif

    <h1>Crear Cursos</h1>
    <form action="{{ url('/cursos') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre del curso</label>
        <input type="text" class="form-control" name="nombre" id="nombre">

        <label for="Apellido">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion">

        <label for="fecha_inicio">Fecha de inicio</label>
        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio">

        <label for="fecha_fin">Fecha de finalizacion</label>
        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin">

        <label for="direccion">Estado</label>
        <input type="text" class="form-control" name="estado" id="estado">
        <br>

        <div class="d-flex justify-content-between">
            <input type="submit" class="btn btn-primary" value="Guardar">

            <a href="{{ route('alumnos.index') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </div>

    </form>
</div>
