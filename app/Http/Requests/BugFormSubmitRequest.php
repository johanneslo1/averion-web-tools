<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BugFormSubmitRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:256',
            'message' => 'required|string|min:6|max:1024'
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'name.required' => 'Bitte gib deinen Namen an.',
            'name.min' => 'Dein Name sollte länger als 3 Zeichen lang sein.',
            'name.max' => 'Dein Name sollte nicht länger als 256 Zeichen lang sein.',
            'message.required' => 'Bitte gib deine Nachricht ein.',
            'message.min' => 'Deine Nachricht sollte länger als 6 Zeichen lang sein.',
            'message.max' => 'Deine nachricht sollte nicht länger als 1024 Zeichen lang sein.',
        ];
    }
}
