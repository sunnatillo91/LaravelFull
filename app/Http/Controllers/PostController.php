<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $newPost = new Post;
        // $newPost->title = 'new post';
        // $newPost->content = 'new post content';
        // $newPost->short_content = 'new post short content';
        // $newPost->photo = '/storage/new_post.png';
        // $newPost->save();

        // $newPost = Post::create([
        //     'title' => 'new post',
        //     'content' => 'new post content',
        //     'short_content' => 'new post short content',
        //     'photo' => 'photo.png'
        // ]);

        // $post = Post::find(3);
        // $post->title = "O'zgartirilgan sarlavha";      
        // $post->save();                              //1-usul 

        // $post = Post::find(3)->update(['title' => 'yangi sarlavha']);  //2-usul

        // $post = Post::where('id', 8)->first();
        // $post->delete();

        Post::withTrashed()->find(3)->restore();

        $posts = Post::all();

        dd($posts);

        return 'deleted';


        // $posts = Post::all();
        // $posts = Post::where('content', 'SXAx')->first();

        // $post = Post::find(1);

        // $posts = Post::firstOrCreate(
        //     ['title' => 'London to Paris'],
        //     ['id' => 1, 'content' => '11:30', 'short_content' => 'jgff'],
        //     ['photo' => 'nab']
        // );

        // dd($posts);


        return view('posts.index');
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
