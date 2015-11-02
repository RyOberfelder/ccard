<?php namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller {
	public function __construct()
	{
		$this->middleware('auth', ['only' => 'create']);
	}

	public function index(){

		$posts = Post::all();


		return view('posts.index')->with('posts', $posts);
	}
	public function show($id){

		$post = Post::findOrFail($id);

		return view('posts.show')->with('post', $post);
	}
	public function update($id, PostRequest $request){

		$post = Post::findOrFail($id);
		$post->update($request->all());

		return redirect('posts');
	}
	public function create(){

		return view('posts.create');
	}
	public function store(PostRequest $request){

		$post = new Post($request->all());

		\Auth::user()->posts()->save($post);

		return redirect('posts');
	}
	public function edit($id){
		$post = Post::findOrFail($id);
		return view('posts.edit', compact('post'));
	}
}
