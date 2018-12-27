<?php

namespace App\Http\Controllers;

use App\alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = \App\alumnos::All();
        return view('index', compact('students'));
    }

    public function newStudent(Request $request)
    {
        \App\alumnos::create([
            'nc' => $request['nc'],
            'nameStudent' => $request['name'],
            'career' => $request['career'],
            'age' => $request['age'],
            'phone' => $request['phone'],
            ]);
        return "Alumno registrado correctamente";
        //return view('create');
        //return redirect('create')->with('message', 'store');
    }

    public function create(){
        return view('create');
    }

    public function read()
    {
        return view('read');
    }

    public function update()
    {
        return view('update');
    }

    public function delete()
    {
        return view('delete');
    }
}
