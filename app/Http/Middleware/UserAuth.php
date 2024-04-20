<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\API\ApiAuth as ApiAuthModal;
use App\Models\Admin\Activities;
use App\Libraries\General;
use App\Models\Admin\Users;

class UserAuth extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     public function handle($request, Closure $next, ...$guards)
     {
         $user = $request->session()->get('user');
         $user = Users::select(['id'])->where('status', 1)->where('id', $user->id)->limit(1)->first();
         if($user){
             return $next($request);
         } 
         return redirect('/login');
     }
}
