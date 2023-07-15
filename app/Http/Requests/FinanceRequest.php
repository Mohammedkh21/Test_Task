<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinanceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'income'=>'required|integer',
            'employees'=>'required|integer',
            'current_assets'=>'required|integer',
            'current_claims'=>'required|integer',
            'website'=>'nullable|url',
            'mortgage_original'=>'required|boolean',
            'other_guarantees'=>'required|boolean',
            'terms'=>'required',

        ];
    }
}
