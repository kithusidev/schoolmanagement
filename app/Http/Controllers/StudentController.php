<?php

namespace App\Http\Controllers;
use App\models\student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index(){
      $students=student::latest()->paginate(5);
      return view('students.index',compact('students'))//students is the folder inwhich the view are stored
      ->with('i',(request()->input('page',1)-1)*5);
  }  
  public function create(){
      return view('students.create');
  }
  public function store(Request $request){
      $request->validate([
          'name'=>'required',
          'coarse'=>'required',
          'fee'=>'required',
      ]);
      student::create($request->all());
      return redirect()->route('students.index')
     ->with('success','students created successfully.');
    }
public function edit(Student $student){
    return view('students.edit',compact('student'));
}
public function update(Request $request, Student $student){
    $request->validate([
    ]);
    $student->update($request->all());
    return redirect()->route('students.index')
    ->with('success','student updated successfully');
 }
 public function destroy(Student $student){
    $student->delete();
    return redirect()->route('students.index')
    ->with('success','students deleted successfully');
 }
}