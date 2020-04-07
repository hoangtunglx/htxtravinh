<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Manager
{
	public function handle($request, Closure $next)
	{
		if(Auth::user()->quyenhan == "canboqlhtx" || Auth::user()->quyenhan == "canbohtx")
		{
			return $next($request);
		}
		
		return redirect('errors/403')->with('error_message', 'Người dùng không đủ quyền hạn để thao tác chức năng này!');
	}
}