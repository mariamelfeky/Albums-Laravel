<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::where('user_id',Auth::id())->paginate(9);
        return view('photos.index',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
        // dd($request->is_private);

        $photo_path = $request->photo->store('uploads', 'public');
        // dd($photo_path);

        $photo = Photo::create([
            'photo' => $photo_path,
            'is_private' => $request->is_private == null ? 0 : 1 ,
            'user_id' => Auth::id(),
        ]);
        // $photos = Photo::where('user_id',Auth::id())->paginate(9);

        return redirect(route('photo.index'))->with(['success'=>'Your new photo added successfully']); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('photos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photo = Photo::findOrFail($id);
        $photo->is_private = $request->is_private == null ? 0 : 1 ;
        $photo->update();
        return redirect(route('photo.index'))->with(['success'=>'photo updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return redirect(route('photo.index'))->with(['success'=>'Your photo has been deleted successfully']); 

    }
}
