<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 11/1/15
 * Time: 9:11 AM
 */

namespace Repository\Eloquent;


use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    protected $table = 'sms';
    public $timestamps = true;
}