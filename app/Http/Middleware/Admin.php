<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
	public function handle($request, Closure $next)
	{
		if(Auth::user()->quyenhan == "quantrivien" || Auth::user()->quyenhan == "canboqlhtx" || Auth::user()->quyenhan == "canbohtx" || Auth::user()->quyenhan == "nongdan")
		{
			return $next($request);
		}
		
		return redirect('errors/403')->with('error_message', 'Người dùng không đủ quyền hạn để thao tác chức năng này!');
	}
}