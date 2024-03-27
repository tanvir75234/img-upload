<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Home;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeController extends Controller{
    public function index(){
        $data = Home::all();
        return view('home.home',compact('data'));
    }

    public function add(){
        return view('home.add');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required|min:5',
            'phone' => 'required|min:11',
            'email' => 'required|email',
        ],[
            'name.required' => 'Please enter your name',
            'phone.reuqired' => 'Please enter your phone number',
            'email.required' => 'Please enter your email'
        ]);

        $insert = Home::insert([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'images' => $request['pic'],
        ]);

        if($request->hasfile('pic')){
            $manager = new ImageManager(new Driver());
            $image = $request->file('pic');
            $imageName = 'image'.time().'.'.$image->getClientOriginalExtension();
            $image = $manager->read($image);
            $image = $image->resize(300,300);
            $image ->save('uploads/'.$imageName);

            Home::where('name_id',$insert)->update([
                'images' => $imageName,
            ]);
        }

        if($insert){
            return redirect('/dashboard');
        }else{
            return redirect('/dashboard');
        }
    }
}
