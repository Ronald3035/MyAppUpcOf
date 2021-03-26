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
   	    $student=Student::where('state','1')->orderBy('id','desc')->paginate(4);
    	return view('admin/index')->with('student', $student);
	}
	//create
	public function create(){
		return view('admin/student/create');
	}
	//store
	public function store(Request $request){
		//dd($request);
		$student = new Student($request->all());
		$student->save();
		return redirect()->route('student.index');
	}
	//edit
	public function edit($id){
		$student=Student::find($id);
		return view('admin/student/edit')->with('student', $student);
	}
	//update
	public function update($id, Request $request){
		$student=Student::find($id);
		//dd($request);
		$student->name=$request->name;
		$student->code=$request->code;
		$student->career=$request->career;
		$student->save();
		return redirect()->route('student.index');
		//dd($student);
	}
}