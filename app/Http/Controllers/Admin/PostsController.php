<?php

namespace App\Http\Controllers\Admin;
use Image;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $all = News::paginate(5);
        return view('admin.posts.index', ['all'=>$all]);
    }
    
    public function five()
    {
        $all = News::paginate(5);
        return view('welcome', ['all'=>$all]);
    }
    
    public function create(Request $request)
    {
            
        $news = new News;    
        if($request->method()=='POST'){
            $news->id = $request->id;
            $news->title = $request->title;
            $news->category = $request->category;
            $news->description = $request->description;
            $news->content = $request->content;
            $image = $request->file('image');
            $upload = './uploads';
            $filename = $image->getClientOriginalName();
            $img = Image::make($image)->resize(320, 240);
            $img->save($upload.'/'.$filename);
            $news->filename = $filename;
            $news->save();
            return redirect()->route('news');
        }
        return view('admin.posts.create');
    }
    
    public function edit($id, Request $request)
    {
    $newsClass = News::find($id);  
    if($request->method()=='POST'){
            $newsClass->title = $request->title1;
            $newsClass->category = $request->category1;
            $newsClass->description = $request->description1;
            $newsClass->content = $request->content1; 
            $image1 = $request->file('images');
            $upload1 = './uploads';
            $filename1 = $image1->getClientOriginalName();
            $img1 = Image::make($image1)->resize(320, 240);
            $img1->save($upload1.'/'.$filename1);
            $newsClass->filename = $filename1;
            $newsClass->save();
        return redirect()->route('news');
    }
    return view('admin.posts.edit', ['id'=>$newsClass->id, 'title'=>$newsClass->title, 'category'=>$newsClass->category, 'description'=>$newsClass->description, 'content'=>$newsClass->content, 'filename'=>$newsClass->filename]);
    }
    
    public function destroy($id)
    {
        $news_Class = News::find($id);
        $news_Class->delete();
        return redirect()->route('news');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* 
    public function index()
    {
        $news_class = new News();
        $all = $news_class->getAllNews();
        return view('admin.posts.index', ['all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     
    public function create(Request $request)
    {
        if($request->method()=='POST'){
            $id = $request['id'];
            $title = $request['title'];
            $category = $request['category'];
            $description = $request['description'];
            $content = $request['content'];
            $image = $request->file('image');
            $upload = './uploads';
            $filename = $image->getClientOriginalName();
            $img = Image::make($image)->resize(320, 240);
            $img->save($upload.'/'.$filename);
            $ins = (new News())->insNews($id, $title, $category, $description, $content, $filename);
            return redirect()->route('news');
        }
        return view('admin.posts.create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function edit($id1, Request $request)
    {
    $newsClass = new News();  
    if($request->method()=='POST'){
            $title = $request['title1'];
            $category = $request['category1'];
            $description = $request['description1'];
            $content = $request['content1']; 
        $up = $newsClass->upNews($id1, $title, $category, $description, $content);
        return redirect()->route('news');
    }
    $news = $newsClass->getId($id1);
    return view('admin.posts.edit', ['id'=>$news->id, 'title'=>$news->title, 'category'=>$news->category, 'description'=>$news->description, 'content'=>$news->content]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    
    public function destroy($id1)
    {
        $news_Class = new News();
        $del = $news_Class->delNews($id1);
        $us = $news_Class->getId($id1);
        return redirect()->route('news');
    }
    
        public function five()
    {
        $newsf_class = new News();
        $allf = $newsf_class->getfive();
        return view('welcome', ['allf'=>$allf]);
    }
    */
}