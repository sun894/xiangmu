<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\CateModel;
use App\NewsModel;
class NewsAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.html.login');
    }
    public function do_login()
    {
        $data=request()->except(['_token']);

        $res = Admin::where(['admin_name'=>$data['admin_name'],'admin_pwd'=>$data['admin_pwd']])->first();
        if($res){
           session(['res'=>$res]);
           request()->session()->save();
		   return redirect('/admin_news');
		}
        return redirect('admin_news/login')->with('msg','没有此用户，请联系管理员');
    }

    public function loginout()
    {
        session(['res'=>null]);
        request()->session()->save();
		return view('admin.html.login');
    }
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
        $data = Admin::get();
        return view('admin.html.admin_list',['data'=>$data]);
    }
    public function cate_add()
    {
        return view('admin.html.cate_add');
    }
    public function cate_list()
    {
        $data = CateModel::get();
        return view('admin.html.cate_list',['data'=>$data]);
    }
    public function cate_add_do()
    {
        $post = request()->except('_token');
		$post['c_time'] = time();
		//dd($post);
        $result = CateModel::create($post);
		if($result){
		   return redirect('/admin_news/cate_list');
		}

    }
    public function cate_destroy($id)
    {
        $data = CateModel::destroy($id);
		if($data){
		  return redirect('/admin_news/cate_list');
		}

    }
    public function cate_edit($id)
    {
        $res = CateModel::where('c_id',$id)->first();
        return view('admin.html.cate_edit',['res'=>$res]);
    }
    public function cate_update(Request $request, $id)
    {
        $post = request()->except(['_token']);
		//dd($post);
		$data = CateModel::where('c_id',$id)->update($post);
		if($data !==false){
		  return redirect('/admin_news/cate_list');
		}

    }

    public function admin_add()
    {
        return view('admin.html.admin_add');
    }
    public function admin_add_do()
    {
        $post = request()->except('_token');
		//dd($post);
        $result = Admin::create($post);
		if($result){
		   return redirect('/admin_news/admin_list');
		}

    }
    public function admin_destroy($id)
    {
        $data = Admin::destroy($id);
		if($data){
		  return redirect('/admin_news/admin_list');
		}

    }
    public function admin_edit($id)
    {
        $res = Admin::where('admin_id',$id)->first();
        return view('admin.html.admin_edit',['res'=>$res]);
    }
    public function admin_update(Request $request, $id)
    {
        $post = request()->except(['_token']);
		//dd($post);
		$data = Admin::where('admin_id',$id)->update($post);
		if($data !==false){
		  return redirect('/admin_news/admin_list');
		}

    }

    public function news_add()
    {
		$res = CateModel::get();
		//dd($res);
        return view('admin.html.news_add',['res'=>$res]);
    }
    public function news_store(Request $request)
    {
        $post = request()->except(['_token']);
		if(request()->hasFile('img')){
		  $post['img']=$this->upload('img');
		}
        $post['time'] = time();
		//dd($post);die;
		$data = NewsModel::create($post);
		if($data){
		  return redirect('/admin_news/news_list');
		}
    }
    public function upload($filename)
    {
       if(request()->file($filename)->isValid()){
        $photo = request()->file($filename);
        $result = $photo->store('uploads');
        return $result;
	   }
        exit('文件上传失败'); 
    }

    public function news_list()
    {
        $data = NewsModel::leftjoin('new_cate','new_cate.c_id','=','new.c_id')->get();
		//dd($data);
        return view('admin.html.news_list',['data'=>$data]);
    }
    public function news_destroy($id)
    {
        $data = NewsModel::destroy($id);
		if($data){
		  return redirect('/admin_news/news_list');
		}

    }
    public function news_edit($id)
    {
        $data = NewsModel::where('news_id',$id)->first();
        $res = CateModel::get();
        return view('admin.html.news_edit',['data'=>$data,'res'=>$res]);
    }
    public function news_update(Request $request, $id)
    {
        $post = request()->except(['_token']);
		if(request()->hasFile('img')){
		  $post['img']=$this->upload('img');
		}
        $post['time'] = time();
		$data = NewsModel::where('news_id',$id)->update($post);
		if($data !==false){
		  return redirect('/admin_news/news_list');
		}

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
