<?php

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserPasswordRequest extends FormRequest
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
            'old-password' => ['required', new MatchOldPassword],
            'new-password' => 'required|min:8|max:64',
        ];
    }
}
