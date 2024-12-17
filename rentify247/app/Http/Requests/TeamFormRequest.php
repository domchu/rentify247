<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamFormRequest extends FormRequest
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
    'surname' => 'required|string|max:255',
    'other_name' => 'required|string|max:255',
    'email' => 'required|email|max:255|unique:teams,email', 
    'position' => 'required|string|max:255',
    'contact' => 'required|string|size:15|regex:/^\d+$/', 
    'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', 
    'description' => 'nullable|string|max:500', 
    'company' => 'required|string|max:255',
    'state_of_origin' => 'nullable|string|max:255', 
    'country' => 'required|string|max:255', 
    'date_of_birth' => 'nullable|date|before:today', 
    'qualification' => 'nullable|string|max:255',
    'discipline' => 'nullable|string|max:255',
    'experience' => 'nullable|integer|min:0|max:100', 
    'status' => 'required|in:active,inactive',
        ];
    }
    

   
}