<?php

namespace App\Http\Controllers;

use App\Newstype;
use Illuminate\Http\Request;
use Auth;
use App\Post;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (Auth::check())
        //     {
        //         return view('blog.admin.post',['id'=>Auth::user()->getId()]);
        //     }
        if (Auth::check()) {

            $id = Auth::user()->id;
        }
        return view('blog.admin.post',compact('id'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        if(isset($request->fImage)){
        $img = $request->file('fImage');
        $img_name = $img->getClientOriginalName();



        $post->title = $request->title;
        $post->body = $request->body;
        $post->author_id = $request->idUser;
        $post->publish = '1';
        $post->image = $request->$img_name;
        $post->save();



        $des = 'resources/uploads/images';
        $img->move($des,$img_name);


    }
        else{
            $post->title = $request->title;
            $post->body = $request->body;
            $post->author_id = $request->idUser;
            $post->publish = 1;
            $post->newstype_id = $request->type;
            $post->save();

        }

        $idPost = $request->idPost;
        // $idNews = Newstype::find($request->type)->id;

        // $idPost->newstype()->getRelatedIds();

        // $idPost->newstypes()->attach($$request->type);

        $post->newstypes()->attach($request->type);
        return 'success';

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
