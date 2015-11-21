<?php namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		//$this->middleware('postMiddleware', ['only' => ['update', 'destroy']]);
	}

	public function index(){

		$posts = $this->getAuthUser()->posts();


		return view('posts.index')->with('posts', $posts);
	}

	public function Oindex(){

		$posts = session('organization')->posts();


		return view('posts.index')->with('posts', $posts);
	}

	public function home(){
		$posts = $this->getAuthUser()->posts;
		$users = $this->getAuthUser()->connections;
		$organizations = $this->getAuthUser()->organizations;
		foreach ($users as $user){
			$uposts = $user->posts;
			if(!empty($uposts)){
				foreach($uposts as $post){
					$posts[] = $post;
				}
			}
		}
		foreach($organizations as $organization){
			$uposts = $organization->posts;
			if(!empty($uposts)){
				foreach($uposts as $post){
					$posts[] = $post;
				}
			}
		}
		return view('home.posts')->with('posts', $posts);
	}
	public function show($id){

		$post = Post::findOrFail($id);
		$user = User::findOrFail($post->user_id);

		return view('posts.show')->with('post', $post)->with('user', $user);
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

		$this->getAuthUser()->posts()->save($post);

		return redirect()->back();
	}
	public function Ostore(PostRequest $request){

		$post = new Post($request->all());

		session('organization')->posts()->save($post);

		return redirect('/home/organizations/posts');
	}
	public function edit($id){
		$post = Post::findOrFail($id);
		return view('posts.edit', compact('post'));
	}

	public function destroy($id)
	{
		$post = Post::findOrFail($id);

	$post->delete();

	return redirect('/home/posts');

	}

	public function connect($id)
	{
		$post = Post::findOrFail($id);

	$post->delete();

	return redirect('/home/posts');

// This is the function that you can use to get the auth user
}
public function getAuthUser(){
	return \Auth::user();
}

}
