<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Bitfumes\Multiauth\Http\Requests\AdminRequest as Admin;
class AdminRequest extends Admin
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
     * @return array
     */
    public function rules()
    {
        $email_rule = "required|email|max:255"|Rule::unique('admins')->ignore($this->route('admin'));
        // $admin_id   = $request('admin.id');
        // if (!is_null($admin_id)) {
        //     $email_rule .= ",{$admin_id}";
        // }

        $rules    = [
            'name'     => 'required|max:255',
            'email'    => $email_rule,
            'password' => 'required|min:8|confirmed',
            'role_id'  => 'required',
        ];
        $rules = $this->mergeClientRules($rules);
        $rules = $this->checkForUpdate($rules);

        return $rules;
    }

    protected function mergeClientRules($rules)
    {
        $clientRules = config('multiauth.admin.validations');

        return array_merge($rules, $clientRules);
    }

    protected function checkForUpdate($rules)
    {
        if (request()->method() == 'PATCH') {
            unset($rules['password']);
        }

        return $rules;
    }
}
