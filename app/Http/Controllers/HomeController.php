<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Photo;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $photos = Photo::where('is_private',1)->paginate(9);
        return view('home',compact('photos'));
        
    }

    public function get_nav_item(Request $request){
        
        if($request->item == "MyAlbums"){
            $photos = Photo::where('user_is',Auth::id());
            return view('photoCard',compact('photos')); 

        }
        elseif($request->item == 'Profile'){
            return view('profile');
        }
    }
    // public function pagination_data(Request $request){
    //     if($request->ajax())
    //     {
    //      $data = Photo::where('is_private',null)->paginate(1);
    //      return view('photoCard', compact('data'))->render();
    //     }
    // }
}
