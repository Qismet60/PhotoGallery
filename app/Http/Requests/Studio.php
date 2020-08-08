<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Studio extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::id()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:15'],
            'email' => ['required', 'email', 'min:6', 'max:20'],
            'number' => ['required', 'numeric','min:10'],
            'address' => ['required', 'string', 'min:4', 'max:30'],
            'about' => ['required', 'string', 'min:10', 'max:40'],
            'logo' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:10000']
        ];
    }
}
