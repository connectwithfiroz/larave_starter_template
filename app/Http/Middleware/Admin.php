<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Auth\Middleware\Authenticate;
use Auth;


class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    protected $auth;
    protected $response;
    public function __construct(Guard $auth,ResponseFactory $response){
        $this->auth=$auth;
        $this->response=$response;
    }

    public function handle(Request $request, Closure $next)
    {
        try{
            $user=Auth::guard('admin')->user();
            if($user){
                return $next($request);

            }else{
                return $this->response->redirectTo('admin/login');
            }

        }catch(Exception $e){
            return redirect()->intended('admin/login');
        }
    }
}
