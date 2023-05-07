<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class MyController extends Controller
{
    public function index()
    {
        $people = People::select("*")->get();
        return view('people.index',['people'=>$people]);
    }
    public function create()
    {
        return view('people.create');
    }
    public function read($id)
    {
        $row = People::find($id);

        if (!$row) {
            return response()->json(['message' => 'Row not found'], 404);
        }

        return view('people.show', ['row' => $row]);
    }    
    public function update(Request $request, People $people)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
    
        $people->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','Person updated successfully');
    }
    public function delete(People $people)
    {
        $people->delete();
    
        return redirect()->route('people.index')
                        ->with('success','Person deleted successfully');
    }
}
