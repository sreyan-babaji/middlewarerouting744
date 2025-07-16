<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImgUploadController extends Controller
{
    public function upload_view(){
        return view('img_upload');
    }
    public function uploaded(Request $request){
        $validator= Validator::make($request->all(), [
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|min:50|max:2048'
        ]);
        if ($validator->fails()){
            return redirect()->back()->errors();
        }
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('uploads',$imagename,'public');       
        }
    }
}
