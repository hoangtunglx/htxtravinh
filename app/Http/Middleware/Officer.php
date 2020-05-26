<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Officer
{
	public function handle($request, Closure $next)
	{
		if(Auth::user()->quyenhan == "admin" || Auth::user()->quyenhan == "manager" || Auth::user()->quyenhan == "officer")
		{
			return $next($request);
		}
		
		return redirect()->route('forbidden')->with('error_message', 'Người dùng không đủ quyền hạn để thao tác chức năng này!');
	}
}