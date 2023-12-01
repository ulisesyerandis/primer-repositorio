<?php
namespace App\Http\Controllers;


use App\Models\StudentModel;
use App\Service\StudentService;
//use Illuminate\Support\Facades\Request;
use http\Env\Response;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $studentService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(StudentService $studentService)
    {
        //
       $this->studentService = $studentService;

    }
    //      CRUD function   --  STORE   (create a new student)
    public function store(Request $request)
    {
        // Llama al método store en StudentService
        $student = new StudentModel();
        $student = $this->studentService->store($request);
        return \response()->json($student);
    }

    //      CRUD function   --  INDEX  (get all student)
    public function index(Request $request)
    {
            return \response()->json($this->studentService->index($request));
//           return $this->studentService->index($request);
    }

    //      CRUD function   --  SHOW    (get a student by id)
    public function show($id)
    {
        return \response()->json($this->studentService->show($id));
//        return $this->studentService->show($id);
    }

    //      CRUD function      --   update  (update student by $id)
    public function update(Request $request, $id)
    {
       $student = new StudentModel();
       $student = $this->studentService->update($request, $id);
       return \response()->json($student);
//        return $this->studentService->update($request, $id);
    }

    //      CRUD function       --  DELETE      (delete an student vy $id)
    public function destroy($id)
    {
      return $this->studentService->destroy($id);
    }

}
