<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function dash()
    {
      return view('layouts.dash');
    }

    public function uploadIMG(Request $rq){
      $name='';
      if($files=$rq->file('imgs')){
        foreach($files as $file){
            $name=time().$file->getClientOriginalName();
            $destinationPath = getcwd()."/storesIMG/";
            $file->move($destinationPath,$name);
          }
      }
      //return $name;

      $jsFunction =  '<script type="text/javascript">'."addPost('".$rq->title."','".$rq->desc."','".$rq->dateD."','".$rq->dateF."','".$rq->timeD."','".$rq->timeF."','".$destinationPath.$name."','".$rq->tag."');</script>";
      return view('index')->with('Post', $jsFunction)->with('status', 'Ajouté avec succé ');
    }

    public function hello(){
      return 123;
    }

}
