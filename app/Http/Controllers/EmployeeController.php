<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;


class EmployeeController extends Controller
{
    public function __construct(){
        $this->middleware('verified');
      /*  $this->middleware('auth');
        $this->middleware('auth')->only('create');
        $this->middleware('auth')->only('destroy');
        $this->middleware('auth')->only('edit');*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::get();
        // dd($employee);
        // $employee = Employee::where('employee','!=','')->orderBy('created_at','desc')->get();
        // $count = Employee::where('employee','!=','')->count();
        return view('employee.index', compact('employee')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $arr_dept = ['sample1','sample2','sample3']; 
        $arr_dept = Department::get('Department');
        // dd($arr_dept);
        // $arr_dept = $arr_dept->Department;
        // $dept = Department::all();
        
        return view('employee.create',compact('arr_dept'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Age' => 'required',
            'City' => 'required',
            'Position' => 'required',
            'Department' => 'required',
            'Division' => 'required'
            
        ]);

        if ($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.''.time().'.'.$extension;
            $path = $request->file('img')->storeAs('public/img', $fileNameToStore);
        }else{
            $fileNameToStore = '';
        }

        // dd($employee);
        $employee = new Employee();
        // $employee->fill($request->all());
        $employee->First_Name = $request->First_Name;
        $employee->Last_Name = $request->Last_Name;
        $employee->Age = $request->Age;
        $employee->City = $request->City;
        $employee->Position = $request->Position;
        $employee->Department = $request->Department;
        $employee->Division = $request->Division;
        $employee->img =$fileNameToStore;
        // $employee->id = auth()->user()->id;
        $employee->save();    

        return redirect('/employee');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $employee = Employee::find($id);
        // dd($employee);
        return view('employee.show', compact('employee'));
        // return redirect('/employee');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $arr_dept = Department::get('Department'); 
        // $arr_dept = ['sample1','sample2','sample3'];

        return view('employee.edit', compact('employee', 'arr_dept'));

        // $arr_dept = Department::get('Department');      
        // return view('employee.edit',compact('arr_dept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        if ($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.''.time().'.'.$extension;
            $path = $request->file('img')->storeAs('public/img', $fileNameToStore);
        }
        else{
            $fileNameToStore = '';
        }

        // dd($employee);
        $employee = Employee::find($id);
        // dd($employee);
        // $employee->fill($request->all());
        $employee->First_Name = $request->First_Name;
        $employee->Last_Name = $request->Last_Name;
        $employee->Age = $request->Age;
        $employee->City = $request->City;
        $employee->Position = $request->Position;
        $employee->Department = $request->Department;
        $employee->Division = $request->Division;
        $employee->img =$fileNameToStore;
    
        $employee->save(); 

        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/employee');
    }

    public function search(Request $request)
    {
        // dd($request->str);

        $employee = Employee::query()
        ->where('First_name', 'LIKE', "%{$request->str}%") 
        ->orWhere('Last_name', 'LIKE', "%{$request->str}%")
        ->orWhere('Position', 'LIKE', "%{$request->str}%")
        ->orWhere('Department', 'LIKE', "%{$request->str}%") 
        ->orWhere('Division', 'LIKE', "%{$request->str}%")
        ->get();
        return view('employee.index', compact('employee')); 

    }
}
