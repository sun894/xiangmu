<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.html.admin');
    }
    public function admin()
    {
        return view('admin.html.admin_add');
    }

    public function top()
    {
        return view('admin.html.admin_top');
    }
    public function left()
    {
        return view('admin.html.admin_left');
    }
    public function admin_list()
    {
        return view('admin.html.admin_list');
    }
    public function cate_add()
    {
        return view('admin.html.cate_add');
    }
    public function cate_list()
    {
        return view('admin.html.cate_list');
    }
    public function admin_add()
    {
        return view('admin.html.admin_add');
    }
    public function news_add()
    {
        return view('admin.html.news_add');
    }
    public function news_list()
    {
        return view('admin.html.news_list');
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
