<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
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
            'type' => 'required|string|max:255',
            'amount' =>'required|integer',
            'payment_period' =>'required|integer|max:12',
            'supplier_id' => 'required|exists:suppliers,id',
            'price' => 'required|mimes:pdf|max:10000000',
        ];
    }
}
