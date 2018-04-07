<?php namespace Bantenprov\FormAuth\Http\Middleware;

use Closure;

/**
 * The FormAuthMiddleware class.
 *
 * @package Bantenprov\FormAuth
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class FormAuthMiddleware
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
        return $next($request);
    }
}
