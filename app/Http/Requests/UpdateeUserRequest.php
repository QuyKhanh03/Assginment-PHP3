<?php

namespace App\Http\Requests;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateeUserRequest extends FormRequest
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
        $id = request()->segment('2');

        return [
            'name' => [
                'required', 'string', 'max:50',
                Rule::unique($tableName)->ignore($id),
            ],
            'email' => "required|unique:$tableName,email",
            'password' => "required",
            'role_id' => "required"
        ];
    }
}
