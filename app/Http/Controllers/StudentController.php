<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   public function index(){
   		
   		//$student=Student::all(); MOSTRAR TODO
   		//dd($student);
   	    //filtrar registros
   		//get() : devuelve como una coleccion de objetos
   		//paginate(): devuelve la peticion como una coleccion de objetos y adicionalmente devuelve datos paginados
   		//render(): genera automaticamente un componente HTML paginador
   	    $student=Student::where('state','1')->paginate(2);
    	return view('admin/index')->with('student', $student);
	}
	//create
	public function create(){
		return view('admin/student/create');
	}
	//store
	public function store(Request $request){
		$student = new Student($request->all());
		$student->save();
		return redirect()->route('student.index');
	}
}