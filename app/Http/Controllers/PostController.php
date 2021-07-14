<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // show all data function.
    public function index() {
        $posts = Post::paginate(10);
        return PostResource::collection($posts);
    }

    // create function. 
    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        if($post->save()) {
            return new PostResource($post);
        }
    }

    // show data by id.
    public function show($id) {
        $post = Post::findOrFail($id);
        return new PostResource($post);
    }

    // update data by id.
    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        if($post->save()){
            return new PostResource($post);
        }
    }

    // delete data by id.
    public function destroy($id){
        $post = Post::findOrFail($id);
        if($post -> delete()) {
            return new PostResource($post);
        }
    }
}
