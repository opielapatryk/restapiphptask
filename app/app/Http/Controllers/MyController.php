<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

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
    public function create()
    {
        return view('create');
    }
    public function update()
    {
        return view('update');
    }
    public function delete()
    {
        return view('delete');
    }
}
