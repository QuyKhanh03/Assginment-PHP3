<?php

namespace App\Http\Requests;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $tableName = (new User())->getTable();
        return [
            'name' => "required|string|max:50|unique:$tableName,name",
            'email' => "required|unique:$tableName,email",
            'password' => "required",
            'role_id' => "required"
        ];
    }
}
