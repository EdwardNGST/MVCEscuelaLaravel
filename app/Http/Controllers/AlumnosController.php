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
            $students=DB::table('students')->where('nameStudent','LIKE','%'.$request->readStudent."%")->get();

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
            $query=DB::table('students')->where('nc','=',$request->nc)->get();
            if($query){
                foreach ($query as $key => $student) {
                    $output = array('nameStudent' => $student->nameStudent, 'career' => $student->career, 'age' => $student->age, 'phone' => $student->phone);
                }
            }
            return Response($output);
        }
    }

    public function update()
    {
        return view('update');
    }

    public function updateStudent(Request $request)
    {
        if($request->ajax()){
            $nc=$_GET['nc'];
            $name=$_GET['name'];
            $career=$_GET['career'];
            $age=$_GET['age'];
            $phone=$_GET['phone'];
            DB::table('students')->where('nc','=',$request->nc)->update(['nameStudent' => $name, 'career' => $career, 'age' => $age, 'phone' => $phone]);
            return Response("1");
        }
    }

    public function delete()
    {
        return view('delete');
    }

    public function deleteStudent(Request $request)
    {
        if($request->ajax()){
            DB::table('students')->where('nc','=',$request->nc)->delete();
            return Response("1");
        }
    }
}
