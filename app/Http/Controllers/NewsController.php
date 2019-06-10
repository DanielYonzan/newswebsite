<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\NewsRequest;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        $data= News::all();
        return view('news.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catlist =Category::all();
        return view('news.create',compact('catlist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $file =$request->file('feature_image');
        $fname =uniqid().'_'.rand(1,100000).$file->getClientOriginalExtension();
        $destinationPath='images';
        $file->move($destinationPath,$fname);
       $status = News::create([
            'category'=>$request->input('category'),
            'title'=>$request->input('title'),
            'short_description'=>$request->input('short_description'),
            'description'=>$request->input('description'),
            'feature_image'=>$fname,
            'status'=>$request->input('status'),
            'slider_key'=>$request->input('slider_key'),
            'feature_key'=>$request->input('feature_key'),
            'created_by'=>Auth::user()->username
        ]);
       if($status){
           Session::flash('success','News Created Successfully');
       }else{
           Session::flash('error','Failed to create News');
       }

        return redirect('news/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catlist =Category::all();
       $data = News::find($id);
        return view('news.edit',compact('data','catlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news =News::find($id);
        if($request->file('feature_image')){
            $file =$request->file('feature_image');
            $fname =uniqid().'_'.rand(1,100000).$file->getClientOriginalExtension();
            $destinationPath='images';
            $file->move($destinationPath,$fname);
            $news->feature_image=$fname;
        }
        $news->category=$request->input('category');
        $news->title=$request->input('title');
        $news->short_description=$request->input('short_description');
        $news->description=$request->input('description');
        $news->description=$request->input('description');
        $news->status=$request->input('status');
        $news->slider_key=$request->input('slider_key');
        $news->feature_key=$request->input('feature_key');
        $news->modified_by=Auth::user()->username;
        $news->update();
        return redirect('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('news');
    }
}
