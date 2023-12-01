<?php


namespace App\Service;


use App\Models\StudentModel;
use http\Env\Response;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class StudentService
{

    public function __construct()
    {
    }


    //      CRUD function   --  INDEX(GET)  (get all student)
    public function index()
    {
        $student = StudentModel::all();
        return $student;
//        return response()->json($student);
    }       //  --INDEX end--

    //      CRUD function   --  STORE(POST)   (create a new student)
    public function store(Request $request)
    {
        $student = new StudentModel();
        $student->name = $request->input('name');
        $student->save();
        return $student;
//        return response()->json($student);
    }      //  --STORE end--

    //      CRUD function   --  SHOW(GET($id))    (get a student by id)
    public function show($id)
    {
        $student = StudentModel::find($id);
        if (!$student)
        {
            return response()->json(['message'=>'Student not found'], 404);
        }
        return $student;
//        return response()->json($student);
    }       //  --SHOW end--

    //      CRUD function      --   update(PUT)  (update student by $id)
    public function update(Request $request, $id)
    {
        $student = StudentModel::find($id);
        if (!$student)
        {
            return response()->json(['message'=>'Student not found'], 404);
        }
        $student->name = $request->input('name');
        $student->save();
        return $student;
//        return response()->json($student);
    }       //  --UPDATE end--

    //      CRUD function       --  DELETE      (delete an student vy $id)
    public function destroy($id)
    {
        $student = StudentModel::find($id);
        if (!$student)
        {
           return response()->json(['message'=>'Student not found'], 404);
        }
        $student->delete();
        return response()->json(['message' => 'Student deleted']);
    }       //  --DELETE end--

}
