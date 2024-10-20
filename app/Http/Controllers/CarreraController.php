<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            
            'nombreCarrera'    =>['required'],
            'nombreMediano' =>['required'],
            'nombreCorto' =>['required'],
            'depto_id' => ['required', 'exists:deptos,id']
            
        ];
    }

    public function index()
    {
        $carreras= Carrera::with('depto')->paginate(5);
        return view("Carreras/index",compact("carreras"));

    }


    public function create()
    {
        $deptos = Depto::all();
        $carreras= Carrera::paginate(5); 
        $carrera=new Carrera;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        return view("Carreras/form",compact("carreras",'carrera','deptos',"accion",'txtbtn','des'));
    }

 
    public function store(Request $request)
    {
        $val = $request->validate($this->val);

        // Crear una nueva carrera
        Carrera::create([
            'nombreCarrera' => $request->nombreCarrera,
            'nombreMediano' => $request->nombreMediano,
            'nombreCorto' => $request->nombreCorto,
            'depto_id' => $request->depto_id, // Asigna el departamento seleccionado
        ]);
    
        // Redirigir o mostrar un mensaje de éxito
        return redirect()->route('carreras.index')->with("mensaje", 'Se insertó correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrera $carrera)
    {
        $deptos = Depto::all();
        $carreras=Carrera::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Carreras/form",compact('carreras','carrera','deptos','accion','txtbtn','des'));
    }

   
    public function edit(Carrera $carrera)
    {
        $deptos = Depto::all();
        $carreras=Carrera::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        return view("Carreras/form",compact('carreras','carrera','deptos','accion','txtbtn','des'));
    }

    
    public function update(Request $request, Carrera $carrera)
    {
        $carrera->update($request->all());
        return redirect()->route('carreras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect()->route('carreras.index');
    }
}