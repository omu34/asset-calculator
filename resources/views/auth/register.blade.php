<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" x-data="{role_id: 2}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4 ">
                <x-label for="role_id" value="{{ __('Register As Client:') }}" />
                <select class="border-green-600 w-full rounded-xl focus:border-green-500 focus:ring-green-500 shadow-sm" name="role_id" x-model="role_id" class="block  mt-1 h-10 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                    <option value="2">Business Class</option>
                    <option value="4">Employer Class</option>
                    <option value="5">Dealer</option>
                    <option value="6">Are You A Dealer? Do You Have Agents? Register Here</option>
                    <option value="3">Stricty For COOP Employees</option>
                </select>
            </div>

            <div class="mt-4" x-show="role_id == 2">
                <x-label for="business_name" value="{{ __('Business Name') }}" />
                <x-input id="business_name" class="block mt-1 w-full" type="text" :value="old('business_name')" name="business_name" />

                <x-label for="business_account_number" value="{{ __('Business Coop Account Number') }}" />
                <x-input id="business_account_number" class="block mt-1 w-full" type="text" :value="old('business_account_number')" name="business_account_number" />

                <x-label for="business_number" value="{{ __('Business Number') }}" />
                <x-input id="business_number" class="block mt-1 w-full" type="text" :value="old('business_number')" name="business_number" />
            </div>

            <div class="mt-4" x-show="role_id == 3">
                <x-label for="employee_job_id" value="{{ __('Job Identity') }}" />
                <x-input id="employee_job_id" class="block mt-1 w-full" type="text" name="employee_job_id" />
                <x-label for="employee_name" value="{{ __('Job Title') }}" />
                <x-input id="employee_name" class="block mt-1 w-full" type="text" name="employee_name" />

            </div>

            <div class="mt-4" x-show="role_id == 4">
                <x-label for="employer_name" value="{{ __('Employer Name') }}" />
                <x-input id="employer_name" class="block mt-1 w-full" type="text" name="employer_name" />
                <x-label for="employer_account_number" value="{{ __('Employer Coop Account Number') }}" />
                <x-input id="employer_account_number" class="block mt-1 w-full" type="text" name="employer_account_number" />
                <x-label for="employer_phone_number" value="{{ __('Employer Phone Number') }}" />
                <x-input id="employer_phone_number" class="block mt-1 w-full" type="text" name="employer_phone_number" />

            </div>


            <div class="mt-4" x-show="role_id == 5">
                <x-label for="dealer_name" value="{{ __('Dealer Name') }}" />
                <x-input id="dealer_name" class="block mt-1 w-full" type="text" name="dealer_name" />
                <x-label for="dealer_phone_number" value="{{ __('Dealer Registration Number') }}" />
                <x-input id="dealer_phone_number" class="block mt-1 w-full" type="text" name="dealer_phone_number" />
                <x-label for="dealer_location" value="{{ __('Dealer Location') }}" />
                <x-input id="dealer_location" class="block mt-1 w-full" type="text" name="dealer_location" />

            </div>
            <div class="mt-4" x-show="role_id == 6">
                <x-label for="agent_name" value="{{ __('Agent Name') }}" />
                <x-input id="agent_name" class="block mt-1 w-full" type="text" name="agent_name" />
                <x-label for="agent_phone_number" value="{{ __('Agent Registration Number') }}" />
                <x-input id="agent_phone_number" class="block mt-1 w-full" type="text" name="agent_phone_number" />
                <x-label for="agent_location" value="{{ __('Agent Location') }}" />
                <x-input id="agent_location" class="block mt-1 w-full" type="text" name="agent_location" />

            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline  text-green-600 hover:text-green-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-green-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>




