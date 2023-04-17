<?php

namespace App\Http\Middleware;

use App\Models\OrderHistory;
use Closure;
use Illuminate\Http\Request;

class isSubscriber
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
        $is_subscriber = OrderHistory::where("user_id", auth()->id())->first();
        if($is_subscriber){
           $is_date_expire =  $is_subscriber->where("end_date", ">", date('Y-m-d'))->first();
           if(!$is_date_expire){
                return redirect()->route("user.packages")->with("msg", "You have to buy any package to get consultation");
           }

        }elseif(!$is_subscriber){
            return redirect()->route("user.packages")->with("msg", "You have to buy any package to get consultation");
        }
        return $next($request);
    }
}
