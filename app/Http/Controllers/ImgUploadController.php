<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Uploads;

class ImgUploadController extends Controller
{
    public function upload_view(){
        $pic=Uploads::first();
        return view('img_upload',compact('pic'));
    }
    public function uploaded(Request $request){
        $validator= Validator::make($request->all(), [
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($validator->fails()){
            return redirect()->back()->witherrors('validator');
        }
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('photo',$imagename,'public');  
            $upload= new Uploads();
            $upload->img_url = $imagename;
            $upload->save();
                
        }
        return redirect()->route('upload.view')->with('success','image successfully upload');
    }
}
