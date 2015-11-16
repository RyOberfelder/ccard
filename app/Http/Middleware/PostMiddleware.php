<?php namespace App\Http\Middleware;

use Closure;

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
		// return $request;
		 /*
		 if($request->user_type == 'App\User'){
			 if (!$request->creator->id == \Auth::user()->id) {
					 return redirect()->back();
			 }
		 }else{
			 if(session('organization') != null){
				 if (!$request->creator->id == session('organization')->id) {
						 return redirect()->back();
				 }
			 }
		 }
		 */

			 return $next($request);
	 }

}
