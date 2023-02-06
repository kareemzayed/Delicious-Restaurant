<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reverseTableRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required|max:255|string|regex:/^[a-zA-Z0-9 ]+$/u',
            'email' => 'required|max:255|email',
            'phone' => 'required|max:1599999999|numeric',
            'date' => 'required|date_format:Y/m/d|after:today',
            'time' => 'required|date_format:H:i',
            'people' => 'required|numeric|max:5',
            'card' => 'numeric',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
            'message' => 'required|max:1000|regex:/^[a-zA-Z0-9 ]+$/u',
        ];
    }
}
