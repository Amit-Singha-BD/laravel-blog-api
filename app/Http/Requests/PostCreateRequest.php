<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => "required|string|max:255",
            'body' => "required|string",
            'user_id' => "required|integer|exists:users,id",
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',

            'body.required' => 'The body field is required.',
            'body.string' => 'The body must be a string.',

            'user_id.required' => 'The user ID field is required.',
            'user_id.integer' => 'The user ID must be an integer.',
            'user_id.exists' => 'The selected user does not exist.',
        ];
    }
}
