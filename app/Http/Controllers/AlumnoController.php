<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Alumno;
use Illuminate\Http\Request;
use Flash;

use function PHPUnit\Framework\returnSelf;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('buscarpor');
        $alumnos = Alumno::where('nombre','like',"%nombre%");
        $alumnos = Alumno::paginate(3);
        //$alumnos = DB::table('alumnos')->get();
        //$alumnos = Alumno::all();
        //return json_decode($alumnos);
        return view('alumnos.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'nombre' => 'required |string',
            'apellido' => 'required |alpha',
            'edad' => 'required |max:3',
            'ci' => 'required |numeric',
            'telefono' => 'required |max:13',
            'direccion' => 'required',
            'gmail' => 'required |email|unique:alumnos.gmail',
            'profesion' => 'required',
            'genero' => 'required',
            'fecha_de_nacimiento' => 'required'
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido',
            'telefono.required' => 'El número de teléfono es requerido',
            'direccion.required' => 'La dirección es requerida',
            'profesion.required' => 'La profesión es requerida',
            'fecha_de_nacimiento.required' => 'La fecha de nacimiento es requerida',
        ];
        $this->validate($request, $rules, $mensaje);

        $alumnos= request()->except('_token');
        //return response()->json($alumnos);
        Alumno::insert($alumnos);
        Flash::success('Creado correctamente');
        return redirect(route('alumnos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos = Alumno::findorFail($id);
        return view('alumnos.show', compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos = Alumno::findorFail($id);
        return view('alumnos.edit', compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumnos=request()->except(['_token', '_method']);
        Alumno::where('id','=',$id)->update($alumnos);
        Flash::success('Actualizado correctamente');
        return redirect('alumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::destroy($id);
        Flash::error('Eliminado correctamente');
        return redirect('alumnos');
    }
}
