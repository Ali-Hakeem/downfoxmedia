<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;


class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

     public function authorize()
    {
        return Auth::check();
    }
    public function rules(): array
    {
        return [
            'embed' => ['required', 'min:5'],
            'title' => ['required', 'min:1'],
            'body' => ['required',  'min:2'],
			'author' => ['required'],
            'image' => ['required','max:1000','mimes:jpg,jpeg,png,webp'],
            'category_ids' => ['required', 'min:1']
        ];
    }
}
