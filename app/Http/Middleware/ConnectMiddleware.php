<?php namespace App\Http\Middleware;

use Closure;

class ConnectMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (\Auth::user()->connections()->where('connection_id', '=', $request->segment(3))->count() == 0){
				return $next($request);
		}
		return	redirect()->back()->withErrors(['Already Connected', 'You can not connect with this person cause the connection already exists.']);

	}

}
