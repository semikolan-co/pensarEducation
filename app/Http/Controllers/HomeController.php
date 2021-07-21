<?php

namespace App\Http\Controllers;
use App\Models\demostudent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function adddemostudent(Request $req){
        
        $student = demostudent::create($req->all());
        $student->email = $req->parentemail;
        $student->save();
        return view('pages.success');
    }
}
