<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Facades\Auth;

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
        // if(如果你是普通客戶){
        //     return redirect('客戶首頁');
        // }elseif(你是甲級客戶){
        //     return redirect('甲級客戶首頁');

        // }elseif(你是加盟商){
        //     return redirect('加盟商首頁');
        // }elseif(你是系統管理員){
        //     return redirect('管理頁');
        // }else{
        //     //請求通過上面條件，就前往下一個階段
        //     return $next($request);
        // }

        //假設這個平台只有兩個使用者 John 和 Senna
        //John登入後會到後台（因為他是超級管理者）
        //Senna登入後只能到前台（因為她只能管理留言）
        if(Auth::user()->name == 'John'){
            return $next($request);
        }else{
            return redirect('/');
        }

    }
}
