<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // TODO: modify to check authenticated
        // TODO: modify to check authorised / own the contact
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'given_name' => ['required', 'string', 'max:64'],
            'family_name' => ['nullable', 'string', 'max:64'],
            'nickname' => ['nullable', 'string', 'max:32'],
            'title' => ['nullable', 'string', 'max:16'],

        ];
    }
}
