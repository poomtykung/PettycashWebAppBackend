<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\viewpettycash;

class ViewPettyCashController extends Controller
{
   

    public function GetWithdrawWithEmployeeId(string $employeeId){
        $withdrawWithEmployeeId = viewpettycash::where('Employee_code',$employeeId)->get()->toArray();
        $data = json_encode(array('data'=>$withdrawWithEmployeeId),JSON_UNESCAPED_UNICODE);
        return $data;
    }

    public function GetWithdrawWithManagerId(string $managerId){
        $withdrawWithManagerId = viewpettycash::where('Manager_id',$managerId)->get()->toArray();
       $data = json_encode(array('data'=>$withdrawWithManagerId),JSON_UNESCAPED_UNICODE);
       return $data;
    }

    public function GetWithdraw(){
        $withdraw = viewpettycash::select('*')->get()->toArray();
       $data = json_encode(array('data'=>$withdraw),JSON_UNESCAPED_UNICODE);
       return $data;
    }
}
