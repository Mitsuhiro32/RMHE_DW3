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
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
        <br>

        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido">
        <br>

        <label for="edad">Edad</label>
        <input type="number" class="form-control" name="edad" id="edad">
        <br>

        <label for="ci">Ci</label>
        <input type="text" class="form-control" name="ci" id="ci">
        <br>

        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono">
        <br>

        <label for="direccion">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion">
        <br>

        <label for="gmail">Gmail</label>
        <input type="gmail" class="form-control" name="gmail" id="gmail">
        <br>

        <label for="profesion">Profesión</label>
        <input type="text" class="form-control" name="profesion" id="profesion">
        <br>

        <label for="genero">Genero</label>
        <select class="form-select" aria-label="Default select example" name="genero" id="genero">
            <option selected>Seleccione</option>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select>
        <br>

        <label for="fecha_de_nacimiento">Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="fecha_de_nacimiento" id="fecha_de_nacimiento">
        <br>

        <div class="form-group col-md-13">
            {!! Form::label('curso_id', 'Curso') !!}
            {!! Form::select('curso_id', $cursos, null, ['class' => 'form-control custom-select', 'placeholder' => 'Seleccione']) !!}
        </div>
        <br>

        <div class="d-flex justify-content-between">
            <input type="submit" class="btn btn-primary" value="Guardar">

            <a href="{{ route('alumnos.index') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </div>

    </form>
</div>
