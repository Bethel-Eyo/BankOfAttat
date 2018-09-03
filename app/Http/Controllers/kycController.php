<?php

namespace App\Http\Controllers;

use Auth;

use App\Kyc;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class kycController extends Controller
{
    // to create a constructor for the class

    public function __construct() {
        $this->middleware('auth');
    }

    // public function validate(array $data){
    //     return Validator::make($data, [
    //         'refereeBankNumber' => 'required|string|max:21',
    //         'bvn' => 'required|string|max:21',
    //         'occupation' => 'required|string|max:50',
    //         'country' => 'required|string|max:70',
    //         'stateOfResidence' => 'required|string|max:70',
    //         'cityOfResidence' => 'required|string|max:70',
    //         'kinName' => 'required|string|max:70',
    //         'contact' => 'required|string|max:15',
    //         'work' => 'required|string|max:50',
    //         'acctName' => 'required|string|max:70',
    //         'bank' => 'required|string|max:30',
    //         'acctNum' => 'required|string|max:30',
    //     ]);
    // }

    public function index(){
        $kyc  =Kyc::where('user_id', Auth::id())->first();
        return view('kyc')->with(['kyc'=> $kyc]);
    }

    public function saveKyc(Request $data){
        $kyc  = Kyc::where('user_id', Auth::id())->first();

        $data->validate([
            'refereeBankNumber' => 'required|string|max:21',
            'bvn' => 'required|string|max:21',
            'occupation' => 'required|string|max:50',
            'country' => 'required|string|max:70',
            'stateOfResidence' => 'required|string|max:70',
            'cityOfResidence' => 'required|string|max:70',
            'kinName' => 'required|string|max:70',
            'contact' => 'required|string|max:15',
            'work' => 'required|string|max:50',
            'acctName' => 'required|string|max:70',
            'bank' => 'required|string|max:30',
            'acctNum' => 'required|string|max:30',
        ]);

        if($kyc == null){
            Kyc::create([
                'user_id' => Auth::id(),
                'referee_bank_no' => $data->refereeBankNumber,
                'gender' => $data->sex,
                'marital_status' => $data->maritalStatus,
                'bvn' => $data->bvn,
                'dob' => $data->dateOfBirth,
                'occupation' => $data->occupation,
                'religion' => $data->religion,
                'country_of_residence' => $data->country,
                'state_of_residence' => $data->stateOfResidence,
                'city_of_residence' => $data->cityOfResidence,
                'nok_name' => $data->kinName,
                'nok_no' => $data->contact,
                'nok_occupation' => $data->work,
                'acc_name' => $data->acctName,
                'bank_name' => $data->bank,
                'acc_no' => $data->acctNum,
                'state_of_origin' => $data->stateOfOrigin,
                'lga_of_origin' => $data->lga_origin,
            ]);
        } else {
            $kyc->referee_bank_no = $data->refereeBankNumber;
            $kyc->gender = $data->sex;
            $kyc->marital_status = $data->maritalStatus;
            $kyc->bvn = $data->bvn;
            $kyc->dob = $data->dateOfBirth;
            $kyc->occupation = $data->occupation;
            $kyc->religion = $data->religion;
            $kyc->country_of_residence = $data->country;
            $kyc->state_of_residence = $data->stateOfResidence;
            $kyc->city_of_residence = $data->cityOfResidence;
            $kyc->nok_name = $data->kinName;
            $kyc->nok_no = $data->contact;
            $kyc->nok_occupation = $data->work;
            $kyc->acc_name = $data->acctName;
            $kyc->bank_name = $data->bank;
            $kyc->acc_no = $data->acctNum;
            $kyc->state_of_origin = $data->stateOfOrigin;
            $kyc->lga_of_origin = $data->lga_origin;
            $kyc->save();
        }

        return redirect('/home');
        ;
    }
}
