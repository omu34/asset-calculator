<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\EmployeeJobView;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input)
    {
        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'role_id' => ['required', 'in:2,3,4,5,6,7,8,9'],
        ]);

        if ($input['role_id'] == 3) {
            $validator->addRules([
                'employee_job_id' => [
                    'required','string',
                    function ($attribute, $value, $fail) {
                        $employeeJob = EmployeeJobView::where('employee_job_id', $value)->first();
                        if (!$employeeJob) {
                            $fail('You are not a COOP BANK employee.');
                        }
                    },
                    'unique:users,employee_job_id',
                ],
            ]);
        }

        $validator->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id' => $input['role_id'],

            'business_name' =>$input['role_id'] == 2 ?  $input['business_name']: null,
            'business_number' => $input['role_id'] == 2 ? $input['business_number']: null,
            'business_account_number'=>$input['role_id'] == 2 ? $input['business_account_number']: null,

            'employee_name' => $input['role_id'] == 3 ? $input['employee_name'] : null,
            'employee_job_id' => $input['role_id'] == 3 ? $input['employee_job_id'] : null,

            'employer_name' => $input['role_id'] == 4 ? $input['employer_name'] : null,
            'employer_phone_number'=> $input['role_id'] == 4 ? $input['employer_phone_number'] : null,
            'employer_account_number'=> $input['role_id'] == 4 ? $input['employer_account_number'] : null,

            'dealer_name' => $input['role_id'] == 5 ? $input['dealer_name'] : null,
            'dealer_phone_number' => $input['role_id'] == 5 ? $input['dealer_phone_number'] : null,
            'dealer_location' => $input['role_id'] == 5 ? $input['dealer_location'] : null,

            'agent_name' => $input['role_id'] == 6 ? $input['agent_name'] : null,
            'agent_phone_number' => $input['role_id'] == 6 ? $input['agent_phone_number'] : null,
            'agent_location' => $input['role_id'] == 6 ? $input['agent_location'] : null,
        ]);

        return $user;
    }
}
