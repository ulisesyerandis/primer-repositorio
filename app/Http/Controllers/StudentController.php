<?php
namespace App\Http\Controllers;


use App\Models\StudentModel;
use Illuminate\Support\Facades\Request;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
        
    //      CRUD function   --  INDEX  (get all student)
    public function index()
    {
        $student = StudentModel::all();
        return response()->json($student);
    }       //  --INDEX end--   

    //      CRUD function   --  STORE   (create a new student)
    public function store(Request $request)
    {
        $student = new StudentModel();
        $student->name = $request->input('name');
        $student->save();
        return response()->json($student);
    }      //  --STORE end--

    //      CRUD function   --  SHOW    (get a student by id)
    public function show($id)
    {
        $student = StudentModel::find($id);
        return response()->json($student);
    }       //  --SHOW end--

    //      CRUD function      --   update  (update student by $id)
    public function update(Request $request, $id)
    {
        $student = StudentModel::find($id);
        $student->name = $request->input('name');
        $student->save();
        return response()->json($student);
    }       //  --UPDATE end--

    //      CRUD function       --  DELETE      (delete an student vy $id)
    public function destroy($id)
    {
        $student = StudentModel::find($id);
        $student->delete();
        return response()->json(['message' => 'Student deleted']);
    }       //  --DELETE end--

}