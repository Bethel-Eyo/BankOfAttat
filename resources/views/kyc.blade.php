@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Help us serve you better') }}</div>
				<div class="card-body">
                    <form method="POST" action="{{ route('kyc') }}" aria-label="{{ __('Kyc') }}">\
                    @csrf

						<div class="form-group row">
							<label for="refereeBankNumber" class="col-sm-4 col-form-label text-md-right">{{ __('Referee bank number') }}</label>

							<div class="col-md-6">
								<input type="text" id="refereeBankNumber" value="{{ $kyc!=null? $kyc->referee_bank_no:'' }}" name="refereeBankNumber" class="form-control{{ $errors->has('refereeBankNumber') ? ' is-invalid' : '' }}" value="" required autofocus>

								@if ($errors->has('refereeBankNumber'))
									<span class="invalid feedback" role="feedback">
										<strong>{{ $errors->first('refreeBankNumber') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="sex" class="col-sm-4 col-form-label text-md-right">{{ __('Gender') }}</label>

							<div class="col-md-6">
								<select class="form-control" id="sex" name="sex">
                                @if($kyc != null)
									<option {{$kyc->gender == 'Male'? 'selected': ''}}>Male</option>
									<option {{$kyc->gender == 'Female'? 'selected': ''}}>Female</option>
									<option {{$kyc->gender == 'Other'? 'selected': ''}}>Other</option>
                                @else
                                    <option>Male</option>
									<option>Female</option>
									<option>Other</option   >
                                @endif
                                </select>
							</div>
						</div>

						<div class="form-group row">
							<label for="maritalStatus" class="col-sm-4 col-form-label text-md-right">{{ __('Marital Status: ') }}</label>

							<div class="col-md-6">
								<select class="form-control" id="maritalStatus" name="maritalStatus">
                                @if($kyc != null)
									<option {{$kyc->marital_status == 'Married'? 'selected': ''}}>Married</option>
									<option {{$kyc->marital_status == 'Single'? 'selected': ''}}>Single</option>
                                @else
                                    <option>Married</option>
									<option>Single</option>
                                @endif
                                </select>
							</div>
						</div>

						<div class="form-group row">
							<label for="bvn" class="col-sm-4 col-form-label text-md-right">{{ __('Bank Verification Number: ') }}</label>

							<div class="col-md-6">
								<input id="bvn" value="{{ $kyc!=null? $kyc->bvn:'' }}" type="text" name="bvn" class="form-control{{ $errors->has('bvn') ? ' is-invalid' : '' }}">
							</div>
						</div>

						<div class="form-group row">
							<label for="dateOfBirth" class="col-sm-4 col-form-label text-md-right">{{ __('Date of Birth: ') }}</label>

							<div class="col-md-6">
								<input type="date" value="{{ $kyc!=null? $kyc->dob:'' }}" name="dateOfBirth" class="date form-control">
							</div>
						</div>

                        <div class="form-group row">
							<label for="occupation" class="col-sm-4 col-form-label text-md-right">{{ __('Occupation: ') }}</label>

							<div class="col-md-6">
								<input id="occupation" value="{{ $kyc!=null? $kyc->occupation:'' }}" type="text" name="occupation" class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}">
							</div>
						</div>

                        <div class="form-group row">
							<label for="religion" class="col-sm-4 col-form-label text-md-right">{{ __('Religion') }}</label>

							<div class="col-md-6">
								<select class="form-control" id="religion" name="religion">
                                @if($kyc != null)
									<option {{$kyc->religion == 'Christian'? 'selected': ''}}>Christian</option>
									<option {{$kyc->religion == 'Muslim'? 'selected': ''}}>Muslim</option>
                                    <option {{$kyc->religion == 'Hindus'? 'selected': ''}}>Hindus</option>
                                    <option {{$kyc->religion == 'Buddhist'? 'selected': ''}}>Buddhist</option>
                                    <option {{$kyc->religion == 'Confucuanist'? 'selected': ''}}>Confucianist</option>
                                    <option {{$kyc->religion == 'Sikhism'? 'selected': ''}}>Sikhism</option>
                                    <option {{$kyc->religion == 'Spiritism'? 'selected': ''}}>Spiritism</option>
                                    <option {{$kyc->religion == 'Judaism'? 'selected': ''}}>Judaism</option>
                                    <option {{$kyc->religion == 'Atheist'? 'selected': ''}}>Atheist</option>
                                    <option {{$kyc->religion == 'Jainism'? 'selected': ''}}>Jainism</option>
									<option {{$kyc->religion == 'Other'? 'selected': ''}}>Other</option>
                                @else
                                    <option>Christian</option>
									<option>Muslim</option>
                                    <option>Hindus</option>
                                    <option>Buddhist</option>
                                    <option>Confucianist</option>
                                    <option>Sikhism</option>
                                    <option>Spiritism</option>
                                    <option>Judaism</option>
                                    <option>Atheist</option>
                                    <option>Jainism</option>
									<option>Other</option>
                                @endif
                                </select>
							</div>
						</div>

                        <div class="form-group row">
							<label for="country" class="col-sm-4 col-form-label text-md-right">{{ __('Country of Residence') }}</label>

							<div class="col-md-6">
                                <input id="country" type="text" value="{{ $kyc!=null? $kyc->country_of_residence:'' }}" name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}">
							</div>
						</div>

                        <div class="form-group row">
							<label for="stateOfResidence" class="col-sm-4 col-form-label text-md-right">{{ __('State of Residence') }}</label>

							<div class="col-md-6">
                            <input id="stateOfResidence" type="text" value="{{ $kyc!=null? $kyc->state_of_residence:'' }}" name="stateOfResidence" class="form-control{{ $errors->has('stateOfResidence') ? ' is-invalid' : '' }}">
							</div>
						</div>

                        <div class="form-group row">
							<label for="cityOfResidence" class="col-sm-4 col-form-label text-md-right">{{ __('City of Residence') }}</label>

							<div class="col-md-6">
                            <input id="cityOfResidence" type="text" value="{{ $kyc!=null? $kyc->city_of_residence:'' }}" name="cityOfResidence" class="form-control{{ $errors->has('cityOfResidence') ? ' is-invalid' : '' }}">
							</div>
						</div>

                        <hr/><hr />

                        <fieldset class="form-group">
                            <legend>Next of Kin</legend>
                            <div class="form-group row">
                                <label for="kinName" class="col-sm-4 col-form-label text-md-right">{{ __('Full Name: ') }}</label>

                                <div class="col-md-6">
                                    <input id="kinName" type="text" name="kinName" value="{{ $kyc!=null? $kyc->nok_name:'' }}" class="form-control{{ $errors->has('kinName') ? ' is-invalid' : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact" class="col-sm-4 col-form-label text-md-right">{{ __('Phone Number: ') }}</label>

                                <div class="col-md-6">
                                    <input id="contact" type="text" value="{{ $kyc!=null? $kyc->nok_no:'' }}" name="contact" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}">
                                </div>
						    </div>
                            <div class="form-group row">
                                <label for="work" class="col-sm-4 col-form-label text-md-right">{{ __('Occupation: ') }}</label>

                                <div class="col-md-6">
                                    <input id="work" type="text" value="{{ $kyc!=null? $kyc->nok_occupation:'' }}" name="work" class="form-control{{ $errors->has('work') ? ' is-invalid' : '' }}">
                                </div>
						    </div>
                        </fieldset>

                        <hr/><hr />

                        </fieldset>
                            <legend>Bank Details</legend>
                                <div class="form-group row">
                                    <label for="acctName" class="col-sm-4 col-form-label text-md-right">{{ __('Account Name') }}</label>

                                    <div class="col-md-6">
                                    <input id="acctName" type="text" value="{{ $kyc!=null? $kyc->acc_name:'' }}" name="acctName" class="form-control{{ $errors->has('acctName') ? ' is-invalid' : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bank" class="col-sm-4 col-form-label text-md-right">{{ __('Bank Name: ') }}</label>

                                    <div class="col-md-6">
                                        <input id="bank" type="text" value="{{ $kyc!=null? $kyc->bank_name:'' }}" name="bank" class="form-control{{ $errors->has('bank') ? ' is-invalid' : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="acctNum" class="col-sm-4 col-form-label text-md-right">{{ __('Account Number: ') }}</label>

                                    <div class="col-md-6">
                                        <input id="acctNum" type="text" value="{{ $kyc!=null? $kyc->acc_no:'' }}" name="acctNum" class="form-control{{ $errors->has('work') ? ' is-invalid' : '' }}">
                                    </div>
						        </div>
                        <fieldset>

                        <hr/><hr />

                        <fieldset>
                            <legend>For Nigerians only</legend>
                            <div class="form-group row">
                                <label for="stateOfOrigin" class="col-sm-4 col-form-label text-md-right">{{ __('State of Origin') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" onchange="populate(this.value, 'lga_origin')" id="stateOfOrigin" name="stateOfOrigin">
                                        @foreach(\App\State::all() as $state)
                                            <option value="{{$state->id}}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lga_origin" class="col-sm-4 col-form-label text-md-right">{{ __('LGA of Origin') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="lga_origin" id="lga_origin">
                                        <option value="null">Select a state of origin</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <hr/><hr />

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection

<script>
function populate(state_id, id){
    $.get('/api/state/'+state_id+'/lga' , function(data){
        var dropDown = document.querySelector('#'+id);
        dropDown.innerHTML = "";
        var lgas = data;
        for (let i = 0; i < lgas.length; i++) {
            var option = document.createElement('option');
            option.value = lgas[i].id;
            option.innerText = lgas[i].name;
            dropDown.appendChild(option);
        }
    });
}
</script>
