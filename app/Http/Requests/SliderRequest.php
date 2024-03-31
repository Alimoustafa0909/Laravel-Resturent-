<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
                'title' => ['max:255'],
                'body' => ['max:255'],
                'image' => ['image'],
                'type'=> ['required'],
                'button_text' => ['max:15', 'nullable'],
                'button_url' => ['nullable', 'url'],
        ];
    }
}
