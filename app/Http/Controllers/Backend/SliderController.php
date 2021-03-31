<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
     public function __construct() 
    { 
        $this->middleware('preventBackHistory');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliderImages.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliderImages.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image'
        ]);

        if($request->hasFile('photo')){
            $path = 'public/asdo/images/sliders';
            $file= $request->file('photo');
            $photo_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($photo_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'slider-photo'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);    
        }

        $slider = new Slider;
        $slider->photo = $filename_with_ext;
        $slider->caption_header = $request->caption_header;
        $slider->caption_text = $request->caption_text;
        // $slider->category = $request->category; 
        $result = $slider->save();

        if($result){
            $request->session()->flash('alert-success', 'Slider image added successfully!');
            return redirect()->route('asdo.sliders.index');
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.sliders.create');
        }
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
        $slider = Slider::findOrFail($id);
        return view('admin.sliderImages.form', compact('slider'));
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
        $slider = Slider::findOrFail($id);
        $request->validate([
            'photo' => 'image'
        ]);

        if($request->hasFile('photo')){
            $path = 'public/asdo/images/sliders';
            $file= $request->file('photo');
            $photo_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($photo_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'slider-photo'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);   
            Storage::delete('public/asdo/images/sliders/'.$slider->photo); 
        }

        $slider->photo = isset($filename_with_ext) ? $filename_with_ext : $slider->photo;
        $slider->caption_header = $request->caption_header;
        $slider->caption_text = $request->caption_text;
        // $slider->category = $request->category; 
        $result = $slider->save();

        if($result){
            $request->session()->flash('alert-success', 'Slider image added successfully!');
            return redirect()->route('asdo.sliders.index');
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.sliders.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        if(isset($slider->photo)){
            Storage::delete('public/asdo/images/sliders/'.$slider->photo);            
        }

        return redirect()->route('asdo.users.index')->with('alert-success', 'User information removed from database!');
    }
}
