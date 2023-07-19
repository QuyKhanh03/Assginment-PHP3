<?php

namespace App\Http\Requests;

use Doctrine\Inflector\Rules\French\Rules;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Brand;
use Illuminate\Validation\Rule;
class BrandUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $tableName = (new Brand())->getTable();
        $id = $this->segment(2);
        return [
            'name' => [
                'required',
                Rule::unique($tableName)->ignore($id),
            ]
        ];
    }
}
