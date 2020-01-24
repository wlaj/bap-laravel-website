<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();



        return view('post.posts', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.posts ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $postData = $request->validate(
          [
            'title' => 'required|min:3',
            'username' => 'required|min:3',
            'description' => 'required|min:10',
            'tags' => 'min:3',
            'image' => 'image'
          ]

        );

        // Hier de gegevens opslaan in de database via de post class / model
      $post = new Post();

      $post->title = $postData['title'];
      $post->username = $postData['username'];
      $post->description = $postData['description'];
      $post->tags = $postData['tags'];

      $newFilename = $postData['image']->store('posts', 'public');
      $postData['image'] = $newFilename;

      Post::create($postData);

      return redirect()->route('post.posts');

      $post->save();


      return 'UW GEGEVENS ZIJN OPGESLAGEN IN DE DATABASE';
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
