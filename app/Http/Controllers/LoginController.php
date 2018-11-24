<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_login_data;
use App\employee;

class LoginController extends Controller
{
    public function GetUser(string $user, string $pass)
    {
        $User = user_login_data::where('Username',$user)->where('Password',$pass)->get()->toArray();
        $data = json_encode(array('data'=>$User),JSON_UNESCAPED_UNICODE);
        return $data;
    }

    public function GetEmployee(string $employeeId)
    {
        $employee = employee::where('Employee_code',$employeeId)->get()->toArray();
        $data = json_encode(array('data'=>$employee),JSON_UNESCAPED_UNICODE);
        return $data;
    }
}
