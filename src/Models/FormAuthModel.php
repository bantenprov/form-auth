<?php namespace Bantenprov\FormAuth\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The FormAuthModel class.
 *
 * @package Bantenprov\FormAuth
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class FormAuthModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'form_auth';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
