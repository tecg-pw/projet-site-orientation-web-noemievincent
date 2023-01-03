<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserInfosRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'picture' => '',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'gender' => 'in:male,female,prefer-not-to-say',
            'bio' => 'min:3, max:300',
        ];
    }
}
