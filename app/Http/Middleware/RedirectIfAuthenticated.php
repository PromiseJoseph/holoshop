<?php

namespace App\Http\Middleware;
use App\Http\Controllers\userController;
use App\Models\Product;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Continue_;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public function getAllproducts(){
        return Product::paginate(10);
     }
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(Auth::user()->admin == true ){
                    return redirect(RouteServiceProvider::ADMIN)->with('sucess','Welcome Admin');
                }
                
                return redirect(RouteServiceProvider::HOME);
            }
        }
                
        return $next($request);
    }
}
