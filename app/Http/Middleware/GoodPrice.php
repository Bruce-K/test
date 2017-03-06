<?php

namespace App\Http\Middleware;

use Closure;

class GoodPrice
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
        if ($request->input('name') === 'zhangsan'){
            return '张三不能登录';
        }

        return $next($request);
    }
}
