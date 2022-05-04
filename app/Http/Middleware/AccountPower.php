<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountPower
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        //如果請求通過，前往下一個階段


        //假設這個平台只有兩個使用者 John 和 Senna
        //John登入後會到後台（因為他是超級管理者）
        //Senna登入後只能到前台（因為她只能管理留言）

        if(Auth::user()->name == 'Sandy'){
            return $next($request);
        }else{
            return redirect('/');
        }

        //改用身份組判斷
        //1.管理者 2.一般用戶
        if(Auth::user()->power == 1){
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
