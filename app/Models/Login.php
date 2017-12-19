<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
    protected $table = 'users';

    protected $guarded = ['id'];

    public $timestamps = false;

    public static function verifyUser($phone){

        return self::where(['phone' => $phone])->get();
    }

    public static function getListUser(){

        return self::orderBy('create_time', 'desc')->paginate(20);
    }
}
