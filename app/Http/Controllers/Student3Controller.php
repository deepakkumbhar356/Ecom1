<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student3;

class Student3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student3s=Student3::all();
        return view('home3',['student3s'=>$student3s ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $student3= new Student3;
            $student3->name =$request->name;
            $student3->city =$request->city;
            $student3->password =$request->password;
            $student3->save();
            return redirect(route('index'))->with('status','Student Added !!');
       
    }

    
    public function edit(string $id)
    {
        $student3=Student3::find($id);
        return view('editform3',['student3'=>$student3]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student3=Student3::find($id);
       $student3->name =$request->name;
       $student3->city =$request->city;
       $student3->password =$request->password;
       $student3->save();
       return redirect(route('index'))->with('status','Student Update !!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student3::destroy($id);
        return redirect(route('index'))->with('status','Student Deleted!!');
    }
}
