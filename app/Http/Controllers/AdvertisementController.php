<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Http\Requests\AdvertisementRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdvertisementController extends Controller
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
        $data =Advertisement::all();
        return view('advertisement.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementRequest $request)
    {
        $file = $request->file('image');
        $fname = uniqid().'_'.rand(0,10000).$file->getClientOriginalExtension();
        $destinationPath = 'images';
        $file->move($destinationPath,$fname);
       $status = Advertisement::create([
            'title'=>$request->input('title'),
            'link'=>$request->input('link'),
            'rank'=>$request->input('rank'),
            'image'=>$fname,
            'status'=>$request->input('status'),
          'created_by'=>Auth::user()->username
        ]);
       if($status){
           Session::flash('success','Advertisement created successfully');
       }else{
           Session::flash('error','Advertisement create error');
       }
        return redirect('advertisement/create');
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
        $data=Advertisement::find($id);
        return view('advertisement.edit',compact('data'));
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
        $ads =Advertisement::find($id);
        if ($request->file('image')){
            $file = $request->file('image');
            $fname = uniqid().'_'.rand(0,10000).$file->getClientOriginalExtension();
            $destinationPath = 'images';
            $file->move($destinationPath,$fname);
            $ads->image=$request->input('image');
        }
        else{

        }
        $ads->title=$request->input('title');
        $ads->link=$request->input('link');
        $ads->rank=$request->input('link');
        $ads->modified_by=Auth::user()->username;
        $ads->update();

        return redirect('advertisement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ads = Advertisement::find($id);
        $ads->delete();
        return redirect('advertisement');
    }
}
