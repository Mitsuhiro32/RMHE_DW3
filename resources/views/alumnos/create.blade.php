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

    <h1>Crear Alumno</h1>
    <form action="{{ url('/alumnos') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre">

        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido">

        <label for="edad">Edad</label>
        <input type="number" class="form-control" name="edad" id="edad">

        <label for="ci">Ci</label>
        <input type="text" class="form-control" name="ci" id="ci">

        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono">

        <label for="direccion">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion">

        <label for="gmail">Gmail</label>
        <input type="gmail" class="form-control" name="gmail" id="gmail">

        <label for="profesion">Profesión</label>
        <input type="text" class="form-control" name="profesion" id="profesion">

        <label for="genero">Genero</label>
        <select class="form-select" aria-label="Default select example" name="genero" id="genero">
            <option selected>Selecione</option>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select>
        <br>

        <label for="fecha_de_nacimiento">Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="fecha_de_nacimiento" id="fecha_de_nacimiento">

        <label for="curso_id">Cursos</label>
        <select class="form-select" aria-label="Default select example" name="curso_id">
            @foreach ($lista_cursos as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
            @endforeach
        </select>
        <br>

        <div class="d-flex justify-content-between">
            <input type="submit" class="btn btn-primary" value="Guardar">

            <a href="{{ route('alumnos.index') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </div>

    </form>
</div>
