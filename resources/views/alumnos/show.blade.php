@include('app')
@include('menu')

<div class="container">
    <h1>Detalle del Alumno</h1>
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" value="{{$alumnos->apellido}}" disabled="true">

    <label for="edad">Edad</label>
    <input type="number" class="form-control" name="edad" id="edad" value="{{$alumnos->edad}}" disabled="true">

    <label for="ci">Ci</label>
    <input type="text" class="form-control" name="ci" id="ci" value="{{$alumnos->ci}}" disabled="true">

    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" value="{{$alumnos->telefono}}" disabled="true">

    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" name="direccion" id="direccion" value="{{$alumnos->direccion}}" disabled="true">

    <label for="gmail">Gmail</label>
    <input type="gmail" class="form-control" name="gmail" id="gmail" value="{{$alumnos->gmail}}" disabled="true">

    <label for="profesion">Profesión</label>
    <input type="text" class="form-control" name="profesion" id="profesion" value="{{$alumnos->profesion}}" disabled="true">

    <label for="genero">Genero</label>
    <select class="form-select" aria-label="Default select example" name="genero" id="genero" value="{{$alumnos->genero}}" disabled="true">
        <option selected>Seleccione</option>
        <option value="femenino" {{$alumnos->genero =='Femenino'?'selected':''}}>Femenino</option>
        <option value="masculino" {{$alumnos->genero =='Masculino'?'selected':''}}>Masculino</option>
    </select>
    <br>

    <label for="fecha_de_nacimiento">Fecha de Nacimiento</label>
    <input type="date" class="form-control" name="fecha_de_nacimiento" id="fecha_de_nacimiento" value="{{$alumnos->fecha_de_nacimiento}}" disabled="true">
    <br>

    <div class="d-flex justify-content-between">
        <a href="{{route('alumnos.index')}}">
            <button type="button" class="btn btn-danger">Cancelar</button>
        </a>
    </div>
</div>
