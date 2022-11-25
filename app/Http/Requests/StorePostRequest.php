<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function attributes()
    {
        return [
            'title' => 'Sarlavha',
            'short_content' => 'Qisqacha mazmun',
            'content' => 'Maqola',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'short_content' => 'required',
            'content' => 'required',
            'photo' => 'nullable|image|max:1024'
        ];
    }
}
