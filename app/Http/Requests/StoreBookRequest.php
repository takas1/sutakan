<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:50'],
            'due_date' => ['required', 'date'],
            'start_date' => ['nullable', 'before_or_equal:due_date'],
            'page' => ['required', 'numeric', 'between:1,2000'],
            'page_per_day' => ['nullable', 'numeric', 'between:1,500'],
        ];
    }
}
