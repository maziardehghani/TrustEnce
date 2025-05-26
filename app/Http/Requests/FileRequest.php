<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FileRequest extends FormRequest
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
            'type' => ['required', 'string', Rule::in(['banner', 'background'])],
            'modelable_type' => ['required', 'string'],
            'modelable_id' => ['required', 'integer',],
            'file' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png,webp',
        ];
    }
}
