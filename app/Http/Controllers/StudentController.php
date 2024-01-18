<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
    // En el modelo Student
    protected $fillable = ['student_name', 'student_lastname', 'student_age', 'student_email', 'student_number'];
    protected $guarded = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('show_student', ['students' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $stu = new Student();

        $stu->student_name=$request->input('student_name');
        $stu->student_lastname=$request->input('student_lastname');
        $stu->student_age=$request->input('student_age');
        $stu->email=$request->input('student_email');
        $stu->student_number=$request->input('student_number');
        $stu->group_id = $request -> input('group_id');

        $validator = Validator::make($request->all(), [
            'student_name' => 'required|string|max:100',
            'student_lastname' => 'required|string|max:100',
            'student_age' =>'required|integer|digits:2',
            'student_email' =>'required|email|max:100',
            'student_number' =>'required|numeric',
            'group_id' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                        
        }


        if($stu->save()){
            return redirect()->route('student.create')->with('success', 'Se guardo el registro correctamente!');
        }
        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $student = Student::find($student->id);
        return view('Student.edit', ['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student = Student::find($student->id);

        $student->student_name = $request->student_name;
        $student->student_lastname = $request->student_lastname;
        $student->student_age = $request->student_age;
        $student->email = $request->student_email;
        $student->student_number = $request->student_number;
        $student->group_id = $request -> group_id;
        
        if($student->save()){
            return redirect()->route('student.index')->with('success', 'El registro de'.$student-> student_name.'ha sido actualizado exitosamente');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $s =Student::find($student->id);

        if($s->delete()){
            return redirect()->route('student.index')->with('sucess', "El registro ha sido eliminado!" );
        }
    }
}
