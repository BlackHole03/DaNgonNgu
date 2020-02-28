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

		if ($lang == 'japan') {
			$language = 'japan';
		}

		if ($lang == 'lao') {
			$language = 'lao';
		}

		if ($lang == 'russian') {
			$language = 'russian';
		}

		Session::put('language', $language);
		return redirect()->back();
	}
}
