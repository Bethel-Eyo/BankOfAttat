<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    //
protected $fillable = ['user_id','referee_bank_no','gender','marital_status','bvn','dob',
                    'occupation','religion','country_of_residence','state_of_residence',
                    'city_of_residence','nok_name','nok_no','nok_occupation','acc_name',
                    'bank_name','acc_no','state_of_origin','lga_of_origin'];

protected $table = 'kyc';
}
