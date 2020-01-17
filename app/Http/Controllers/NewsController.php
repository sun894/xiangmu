<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsModel;
use Illuminate\Support\Facades\Redis;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = NewsModel::orderBy('time','desc')->get();
		$res = NewsModel::orderBy('num','desc')->get();
        return view('index.html.index',['data'=>$data,'res'=>$res]);
    }
    public function commit($id)
    {
		$num = Redis::setnx('commit_'.$id,1);
        if(!$num){
		   Redis::incr('commit_'.$id);
		}
        $num = Redis::get('commit_'.$id);
        $res = NewsModel::where('news_id',$id)
		                  ->first();
		//dd($res);
        return view('index.html.news_content',['res'=>$res,'num'=>$num]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
