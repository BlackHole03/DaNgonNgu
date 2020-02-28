<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Localization
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
        $language = Session::get('language', config('app.locale'));
        switch ($language) {
            case 'en':
                $language = 'en';
                break;

            case 'japan':
                $language = 'japan';
            break;

            case 'lao':
                $language = 'lao';
            break;

            case 'russian':
                $language = 'russian';
            break;
            
            default:
            $language = 'vi';
            break;
        }
        \App::setLocale($language);
        
        return $next($request);
    }
}
