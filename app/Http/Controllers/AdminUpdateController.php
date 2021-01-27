<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bitfumes\Multiauth\Http\Controllers\RegisterController as RegisterController;
use App\Http\Requests\AdminRequest;
class AdminUpdateController extends RegisterController
{
    public function update($adminId, AdminRequest $request)
    {
        $admin = $this->adminModel::findOrFail($adminId);
        $request['active'] = request('activation') ?? 0;
        unset($request['activation']);
        $admin->update($request->except('role_id'));
        $admin->roles()->sync(request('role_id'));

        return redirect(route('admin.show'))->with('message', "{$admin->name} details are successfully updated");
    }
}
