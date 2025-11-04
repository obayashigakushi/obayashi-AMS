<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'over_name' => ['required', 'string', 'max:10'],
            'under_name' => ['required', 'string', 'max:10'],
            'over_name_kana' => ['required', 'string', 'max:30', 'regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
            'under_name_kana' => ['required', 'string', 'max:30', 'regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
            'mail_address' => ['required', 'email', 'unique:users', 'max:100'],
            'sex' => ['required'],
            'birth_day' => ['required','date', 'after_or_equal:2000-1-1', 'before:today' ],
            'role' => ['required'],
            'password' => ['required', 'min:8', 'max:20', 'confirmed' ],
        ];
    }
}
