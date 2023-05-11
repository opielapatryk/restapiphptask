<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class MyController extends Controller
{
    public function index()
    {
        $people = People::select("*")->get();
        return view('index',['people'=>$people]);
    }
    public function read($id)
    {
        $people = People::where("id", $id)->get();
        return view('read',['people'=>$people]);
    }    
    public function edit(Request $request, $id)
    {
        $name = $request->input('name');
        DB::table('people')->where('id',$id)->updateOrInsert(['name' => $name]);
        //kombinuj z linijka wyzej... poczytaj cos temat query buildera w dokumentacji
        echo "Record updated successfully.<br/>";
        echo '<a href = "/read/{id}">Click Here</a> to go back.';
    }
    public function show($id) {
        $people = People::where("id", $id)->get();
        return view('update',['people'=>$people]);
     }

    public function create(Request $req)
    {
        // $person = new People;
        // $person->name = $req->name;
        // $person->phone = $req->phone;
        // $person->street = $req->street;
        // $person->city = $req->city;
        // $person->country = $req->country;
        // $person->email = $req->email;
        // $person->save();
        
        return view('create');
    }
    public function destroy($id){

        try {
            People::find($id)->delete();
            $data='user deleted';   
        } catch (\Throwable $th) {
            $data='user not found';
        }
        return $data;
    }
}