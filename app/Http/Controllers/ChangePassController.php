<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

use Auth;
use App\Models\User;
class ChangePassController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // return "okkkkkk";
        return view('users.change_pass');
    }

    public function change_pass(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(Auth::id())->update(['password'=> Hash::make($request->new_password)]);
        return redirect(route('user.show',Auth::id()))->with(['update'=>'your profile updated successfully']);
    }
}
