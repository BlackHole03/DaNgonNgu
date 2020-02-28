<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
	public function changeLanguage($request)
	{
		// dd($request);
		$lang = $request;
		$language = config('app.locale');
		if ($lang == 'en') {
			$language = 'en';
		}
		if ($lang == 'vi') {
			$language = 'vi';
		}
		Session::put('language', $language);
		return redirect()->back();
	}
}
