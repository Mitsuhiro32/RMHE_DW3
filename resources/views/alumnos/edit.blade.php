@include('app')
@include('menu')

<div class="container">
    <h1>Editar Alumno</h1>
    <form action="{{ url('/alumnos/' . $alumnos->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $alumnos->nombre }}">

        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" value="{{ $alumnos->apellido }}">

        <label for="edad">Edad</label>
        <input type="number" class="form-control" name="edad" id="edad" value="{{ $alumnos->edad }}">

        <label for="ci">Ci</label>
        <input type="text" class="form-control" name="ci" id="ci" value="{{ $alumnos->ci }}">

        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $alumnos->telefono }}">

        <label for="direccion">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $alumnos->direccion }}">

        <label for="gmail">Gmail</label>
        <input type="gmail" class="form-control" name="gmail" id="gmail" value="{{ $alumnos->gmail }}">

        <label for="profesion">Profesión</label>
        <input type="text" class="form-control" name="profesion" id="profesion" value="{{ $alumnos->profesion }}">

        <label for="genero">Genero</label>
        <select class="form-select" aria-label="Default select example" name="genero" id="genero"
            value="{{ $alumnos->genero }}">
            <option selected>Seleccione</option>
            <option value="femenino" {{ $alumnos->genero == 'Femenino' ? 'selected' : '' }}>Femenino</option>
            <option value="masculino" {{ $alumnos->genero == 'Masculino' ? 'selected' : '' }}>Masculino</option>
        </select>
        <br>

        <label for="fecha_de_nacimiento">Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="fecha_de_nacimiento" id="fecha_de_nacimiento"
            value="{{ $alumnos->fecha_de_nacimiento }}">

        <label for="curso_id">Cursos</label>
        <select class="form-select" aria-label="Default select example" name="curso_id">
            @foreach ($lista_cursos as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
            @endforeach
            <br>

            <div class="d-flex justify-content-between">
                <input type="submit" class="btn btn-primary" value="Guardar">

                <a href="{{ route('alumnos.index') }}">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </a>
            </div>

    </form>
</div>
