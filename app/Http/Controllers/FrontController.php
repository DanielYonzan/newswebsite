<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Category;
use App\News;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::where('status',1)->orderby('rank','asc')->get();
        $feature_news = News::where('status',1)->where('feature_key',1)->orderby('created_by','desc')->limit(3)->get();
        $singleCatgoryNews = News::where('status',1)->orderby('created_at','desc')->distinct("category")->limit(4)->get();
        $news = News::where('status',1)->orderby('created_at','desc')->get();
//        dd($singleCatgoryNews);
        $ads = Advertisement::where('status',1)->orderby('created_at','desc')->get();
        return view('front.index',compact('feature_news', 'singleCatgoryNews','news','category','ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function detail($id)
    {
        $nw=News::find($id);
        return view('front.details',compact('nw'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
