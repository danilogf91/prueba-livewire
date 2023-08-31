<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'pda_code' => 'required|string|max:255',
            'rate' => 'required|numeric|min:0|max:1000',
            'state' => 'required|in:planification,execution,finished|string|max:255',
            'investments' => 'required|in:innovation,efficiency_&_saving,replacement_&_restructuring,quality_&_hygiene,health_&_safety,environment,maintenance,capacity_increase|string|max:255',
            'justification' => 'required|in:normal_capex,special_project|string|max:255',
            'start_date' => 'required|date|before:finish_date',
            'finish_date' => 'required|date',
        ];
    }
}
