<?php namespace Bantenprov\FormAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The FormAut facade.
 *
 * @package Bantenprov\FormAuth
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class FormAut extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form-auth';
    }
}
