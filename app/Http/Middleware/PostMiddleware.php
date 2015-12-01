<?php namespace App\Http\Middleware;

use Closure;
use App\Post;

class PostMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	 public function handle($request, Closure $next)
	 {
		$tempPost = Post::findOrFail($request->segment(2));
		if($request->segment(1) == "posts" && $request->isMethod('GET')){
			if(\Auth::user()->id == $tempPost->user_id ){
				return redirect(action ('PostsController@protected_show', $tempPost->id));
			}else{
					return $next($request);
			}
		}else{
			if(\Auth::user()->id == $tempPost->user_id ){
					return $next($request);
			}else{
				return redirect()->back();
			}
		}
	 }

}
