<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['lists']=ContactUS::all();
        $data['title']='Danh sách yêu cầu';
        return view('backend/contact/contact-list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontends.lien_he');
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
//        $post = ContactUS::create($input);
//        Session::flash('message','Gửi yêu cầu thành công, chúng tôi sẽ liên hệ bạn sớm nhất!');
//        return redirect()->route('lien_he');
//        return Redirect::to('lien_he');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend/contact/edit-contact-list');
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
        $post = ContactUs::findOrFail($id);
        $post->fill($input);
        $post->save();
        Session::flash('message', 'Cập nhật yêu cầu thành công!');
        return redirect()->route("contact-list");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUS $data,$id)
    {
        $data  = ContactUS::findOrFail($id);

        $data->delete();

        Session::flash('message', 'Delete  successfully!');

        return redirect()->route("contact-list");


    }
}
