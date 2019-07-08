<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('adminname')){
            $actions=explode('\\', \Route::current()->getActionName());
            //或$actions=explode('\\', \Route::currentRouteAction());
            $modelName=$actions[count($actions)-2]=='Controllers'?null:$actions[count($actions)-2];
            $func=explode('@', $actions[count($actions)-1]);
            $controllerName=$func[0];
            $actionName=$func[1];
            // echo $controllerName.':'.$actionName;
            $b=session('b');
            if(empty($b[$controllerName]) || !in_array($actionName,$b[$controllerName])){
                return redirect('/admin')->with('error','抱歉，您没有权限访问该模块，请联系超级管理员');
            }
            return $next($request);
        }else{
            return redirect('/adminlogin/create');
        }
        
    }
}
