<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TalkRequest extends FormRequest
{
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:talks|max:255',
            'desc' => 'required|max:800',
            'level' => 'required|max:32',
            'category' => 'required|max:64',
            'designation' => 'required|max:32'
        ];
    }
}
