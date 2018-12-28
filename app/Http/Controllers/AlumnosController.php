<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
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
        $students = \App\alumnos::All();
        return view('read', compact('students'));
    }

    public function readStudent(Request $request){
        if($request->ajax()){
            $output="";
            $students=DB::table('alumnos')->where('nameStudent','LIKE','%'.$request->readStudent."%")->get();

            if($students){
                foreach ($students as $key => $student) {
                    $output.='<tr>'.
                    '<td>'.$student->nc.'</td>'.
                    '<td>'.$student->nameStudent.'</td>'.
                    '<td>'.$student->career.'</td>'.
                    '<td>'.$student->age.'</td>'.
                    '<td>'.$student->phone.'</td>'.
                    '</tr>';
                }
                return Response($output);
            }
        }
    }

    public function searchStudent(Request $request){
        if($request->ajax()){
            $output="";
            $students=DB::table('alumnos')->where('nc','=',$request->nc)->get();
            if($students){
                foreach ($students as $key => $student) {
                    $output.='<tr>'.
                    '<td>'.$student->nameStudent.'</td>'.
                    '<td>'.$student->career.'</td>'.
                    '<td>'.$student->age.'</td>'.
                    '<td>'.$student->phone.'</td>'.
                    '</tr>';
                }
                return Response($output);
            }
        }
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
