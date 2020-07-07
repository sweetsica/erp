<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $data['title']= 'Danh mục';
        $data['lists']=Post::all();
        return view('post/index',$data);
    }

    public function tin_tuc_moi_truong()
    {
//        $data['lists']=Post::paginate(2);
        $data['lists'] = Post::orderBy('id', 'desc')->paginate(6);
        $data['lastest_post'] = Post::orderBy('id', 'desc')->paginate(3);
        return view('frontends.tin-tuc-moi-truong',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']= 'Danh mục';
        return view('post/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Input::get();
        $post = Post::create($input);
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('assets/images/post');
            $file->move($location,$filename);
            $post->image = $filename;
        }
        $post->save();
        Session::flash('message','Đăng bài thành công!');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $data['post'] = Post::findOrFail($id);
        $data['post'] = Post::findOrFail($id);
        $data['lastest_post'] = Post::orderBy('id', 'desc')->paginate(3);

//        $data['test_post'] = Post::where('title', '=', $title)->firstOrFail();

        return view('frontends.blog-details',$data);
//        return null;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['post'] = Post::findOrFail($id);
        return view('post/edit',$data);
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
        $input = Input::get();
        $post = Post::findOrFail($id);
        $post->fill($input);
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('assets/images/post');
            $file->move($location,$filename);
            $oldImage=$post->image;
            File::delete(public_path('assets/images/post/'. $oldImage));
            $post->image = $filename;
        }
        $post->save();
        Session::flash('message', 'Cập nhật bài viết thành công!');
        return redirect()->route("post.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorFail($id);
        $post->delete();
        return redirect()->route("post.index");
//        return redirect()->back();
    }
}
