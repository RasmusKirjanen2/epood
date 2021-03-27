<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    	//echo "<h1>this text from middleware</h1>";

    	if($request->age && $request->age<18)
    	{
		    return redirect('noaccess');   // viib noaccess.blade.php lehele
    	}
 	        return $next($request);

    }
}
