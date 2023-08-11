<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'Reference' => ['string', 'max:255'],
            'nom' => ['string', 'max:255'],
            'prix_ht' => ['int', 'max:11'],
            'description' => ['string', 'max:255']
        ];
    }
}
