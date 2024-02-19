<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'asset_description' => ['required|string'],
            'asset_price' => ['required|decimal:2'],
            'asset_location' => ['required|string']
        ];
    }

    // public function authorize()
    // {
    //     return Gate::allows('task_access');
    // }
}
