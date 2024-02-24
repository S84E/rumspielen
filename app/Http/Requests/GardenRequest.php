<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GardenRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'number' => 'required',
            'features' => 'required|array',
            'features.*' => 'sometimes|integer|exists:features,id'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
