<?php namespace Bantenprov\FormAuth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\FormAuth\Facades\FormAut;
use Bantenprov\FormAuth\Models\FormAuthModel;

/**
 * The FormAuthController class.
 *
 * @package Bantenprov\FormAuth
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class FormAuthController extends Controller
{
    public function demo()
    {
        return FormAuth::welcome();
    }
}
