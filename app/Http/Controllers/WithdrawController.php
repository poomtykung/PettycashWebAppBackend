<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petty_cash;
use App\user_login_data;
use App\petty_cash_number;
use App\employee;

class WithdrawController extends Controller
{
    public function InsertWithdrawData(string $code,string $employeeId,string $description,string $amount,string $status,string $createDate,string $updateDate)
    {           
        $dataMain = petty_cash::insert([
            'Petty_Cash_Id'=>'0',
            'Code'=>$code,
            'Employee_id'=>$employeeId,
            'Description'=>$description,
            'Amount'=>$amount,
            'Status'=>$status,
            'Create_Datetime'=>$createDate,
            'Update_Datetime'=>$updateDate
        ]);

        if($dataMain){
            $result = 1;
        }else{
            $result = 0;
        }
        
        return $result;
    }

    public function GetPettyCashNumber() {
        $number = petty_cash_number::Select('number')->get()->toArray();
        $data = json_encode(array('data'=>$number),JSON_UNESCAPED_UNICODE);
        return $data;
    }

    public function UpdatePettyCashNumber(string $number){

        $data = petty_cash_number::Select('number')->update(
            [
                'number'=>$number
            ]
        );

        if($data){
            $result = 1;
        } else {
            $result = 0;
        }

        return $result;
    }

    public function UpdateWithdrawStatus(string $code, string $status, string $updateDatetime) {
        $data = petty_cash::where('Code',$code)->update(
            [
                'Status'=>$status,
                'Update_Datetime'=>$updateDatetime
            ]
        );
        if($data)
        {
            $result = 1;
        }
        else
        {
            $result = 0;
        }
        return  $result;
    }

    public function SumPettyCashStatusApprove() {
        $data = petty_cash::where('Status', 'Approve')
        ->sum('Amont');
        return  $data;
    }
}
