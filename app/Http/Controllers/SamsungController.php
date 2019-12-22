<?php

namespace App\Http\Controllers;

use App\Samsung;
use Illuminate\Http\Request;

class SamsungController extends Controller
{
    public function store(Request $request){

          $page= new Samsung();
          $page->user_id= $request->input('user_id');
          $page->price= $request->input('price');
          $page->name = $request->input('name');
          $page->f1= $request->input('f1');
          $page->f2= $request->input('f2');
          $page->f3= $request->input('f3');
          $page->f4= $request->input('f4');
          $page->f5= $request->input('f5');

          $page->save();

          return redirect('order');


    }

}
