<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    
    public $val;
//necesita doble guion bajo
    public function __construct(){
        $this->val = [
            // 'idPeriodo'=>'required',
            'periodo'=>['required'],
            'descripcion'=> 'required',
            'fechaIni' => ['required', 'regex:/^\d{4}-\d{2}-\d{2}$/'],
        'fechaFin' => ['required', 'regex:/^\d{4}-\d{2}-\d{2}$/']

        ];
    }

    public function index()
    {
        $periodos= Periodo::paginate(5);
        return view("Periodos/index",compact("periodos"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periodos= Periodo::paginate(5); 
        $periodo=new Periodo();
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        return view("Periodos/form",compact("periodos",'periodo',"accion",'txtbtn','des'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Periodo::create($val);
        return redirect()->route('periodos.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        $periodos=Periodo::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Periodos/form",compact('periodos','periodo','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        $periodos=Periodo::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        return view("Periodos/form",compact('periodos','periodo','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periodo $periodo)
    {
        $periodo->update($request->all());
        return redirect()->route('periodos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route('periodos.index');
    }
}
