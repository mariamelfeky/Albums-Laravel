<?php

namespace App\Http\Controllers;

use Bitfumes\Multiauth\Http\Controllers\AdminController as AdminController;

use Illuminate\Http\Request;
use Auth;
use App\Models\Photo;
use App\Models\User;

class AdminHomeController extends AdminController
{
    public function index()
    {
        $users = User::count();
        $photos = Photo::count();
        $private_photos = Photo::where('is_private',1)->count();
        $puplic_photos = Photo::where('is_private',0)->count();
        return view('multiauth::admin.home',compact('users','photos','private_photos','puplic_photos'));
    }
    public function usersList(){
        $users = User::paginate(10);
        return view('multiauth::admin.user',compact('users'));
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('admin.users'))->with('message', "You have deleted a user successfully");

    }

    public function albumsList(){
        $photos = Photo::where('is_private',1)->paginate(9);
        return view('multiauth::admin.album',compact('photos'));
    }

    public function deleteAlbum($id){
        $user = Photo::findOrFail($id);
        $user->delete();
        return redirect(route('admin.albums'))->with('message', "You have deleted an album successfully");

    }

}