<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePendingOfferRequest extends FormRequest
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
            'company_logo' => 'required|mimes:jpg,bmp,png,webp',
            'company_name' => 'required',
            'website' => 'required',
            'contact_name' => 'required',
            'contact_email' => 'required',
            'title' => 'required',
            'description' => 'required',
            'skills' => 'exists:skills,slug',
            'add_skill' => 'string|nullable',
            'start_date' => 'required',
            'duration' => 'required',
            'location' => 'required',
            'reception_mode' => 'required|in:email,url',
            'applications_email' => 'nullable|required_if:reception_mode,email',
            'applications_url' => 'nullable|required_if:reception_mode,url',
        ];
    }
}
