<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class ageCheck
{
    public function handle(Request $request, Closure $next)
    {
        if($request->age && $request->age<18){
            return redirect('noaccess');
        }
        return $next($request);
    }
}
