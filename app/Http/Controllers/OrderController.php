<?php

namespace App\Http\Controllers;

use App\Order;
use App\Samsung;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function update(Request $request){
           $course =Samsung::find($request->page_id);
//           return $course->id;

        $user = new Order();
        $user->name= $request->input('sub_name');
        $user->description= $request->input('des_topic');

        $user->save();
        return redirect('/up'.$course->id);
//        return 'yes';
    }
    public function review($id) {
        $user= Samsung::find($id);
        $page= Order::all();

        return view('review',compact('user','page'));
    }
}
