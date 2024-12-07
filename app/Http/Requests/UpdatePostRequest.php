<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'embed' => ['required', 'min:5', Rule::unique('posts')->ignore($this->id),],
            'title' => ['required', 'min:1'],
            'body' => ['required',  'min:2'],
			'author' => ['required'],
            'tag' => ['required'],
            'category_ids' => ['required', 'min:1']
        ];
    }
}
