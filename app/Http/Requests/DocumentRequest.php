<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
            'terms'=>'required',
            'last_tax'=>'required|mimes:pdf|max:10000000',
            'bank_statements'=>'required|array',
            'bank_statements.*'=>'file|mimes:pdf|max:10000000',
            'financial_statements'=>'nullable|array',
            'financial_statements.*'=>'file|mimes:pdf|max:10000000',
            'supporting_documents'=>'nullable|array',
            'supporting_documents.*'=>'file|mimes:pdf|max:10',

        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'mimes'=>'هذا الحقل يجب ان يكون من صيغة pdf',
            'max'=>' يجب ان لا يتجاوز حجم الملف :max كيلوبيت  ',
        ];
    }
}
