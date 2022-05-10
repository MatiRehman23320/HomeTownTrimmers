<?php

namespace App\Http\Controllers;
use App\barbers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class barber extends Controller
{
    public function create(Request $request){
        $post= new barbers();
        $post->Shop_Name = $request->Shop_Name;
        $post->Barber_Name = $request->Barber_Name;
        $post->address = $request->address;
        $post->description = $request->description;
        $post->user_id =Auth::user()->id;

        $post->lat = $request->lat;
        $post->lng = $request->lng;
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            $filesize =  $request->file->getClientSize();
            $filepath = Storage::putfile('public/image',$request->file('file'));
            $post->file= $filepath;
        }
        $post->save();
        return view('barber.dashboard');
    }
    public function edit_post_show($id){
        $edit_post= barbers::find($id);
        // return $edit_post;
        return view('barber.edit_post',compact('edit_post'));
    }
   public function edit_post_store(Request $request)
   {
       $edit = barbers::find($request->id); 
       $edit->Shop_Name = $request->Shop_Name;
       $edit->Barber_Name = $request->Barber_Name;
       $edit->address = $request->address;
       $edit->description = $request->description;
       $edit->user_id =Auth::user()->id;

       $edit->lat = $request->lat;
       $edit->lng = $request->lng;
       if($request->hasFile('file')){
           $filename = $request->file->getClientOriginalName();
           $filesize =  $request->file->getClientSize();
           $filepath = Storage::putfile('public/image',$request->file('file'));
           $edit->file= $filepath;
       }
        $edit->update();
        return view('barber.dashboard');
    //    return redirect()->back();
   }
   



}
