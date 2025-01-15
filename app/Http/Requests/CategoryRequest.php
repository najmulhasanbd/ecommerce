<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'name' => 'required|string|max:100|unique:categories,name',
            'image' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Category name must be Required.',
            'name.string' => 'The category name must be a valid string.',
            'name.max' => 'The category name may not be greater than 100 characters.',
            'name.unique' => 'The category name must be unique. This name is already taken.',

            'image.nullable' => 'The category image is optional.',
            'image.image' => 'The image must be a valid image file.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image size must not exceed 2MB.',
        ];
    }
}
