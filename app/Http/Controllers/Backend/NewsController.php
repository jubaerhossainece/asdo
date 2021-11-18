<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
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
        Gate::authorize('app.news.index');
        $allnews = News::orderBy('publishing_date', 'DESC')->get();
        return view('admin.news.index', compact('allnews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.news.create');
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.news.create');
        $request->validate([
            'heading' => 'required|string',
            'publishing_date' => 'required',
            'ending_date' => 'required',
            'image' => 'nullable|image'
        ]);

        if($request->hasFile('image')){
            $path = 'public/asdo/images/news';
            $file= $request->file('image');
            $image_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'news'.time().'.'.$extension;
            $request->file('image')->storeAs($path, $filename_with_ext);
        }

        $news = new News;
        $news->heading = $request->heading;
        $news->slug = Str::slug($request->heading);
        $news->description = $request->description;
        $news->image = $request->image;
        $news->publishing_date = $request->publishing_date;
        $news->ending_date = $request->ending_date;
        $news->image = $filename_with_ext ?? '';
        $result = $news->save();
        
        if($result){
            $request->session()->flash('alert-success', 'News has been added successfully!');
            return redirect()->route('asdo.news.index');
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.news.create');
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
        Gate::authorize('app.news.show');
        $news = News::find($id);
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.news.create');
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
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
        $request->validate([
            'heading' => 'required|string',
            'publishing_date' => 'required',
            'ending_date' => 'required',
            'image' => 'nullable|image'
        ]);
        $news = News::find($id);
        $photo = $news->photo;

        if($request->hasFile('image')){
            $path = 'public/asdo/images/news';
            $file= $request->file('image');
            $image_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'news'.time().'.'.$extension;
            $request->file('image')->storeAs($path, $filename_with_ext);
            Storage::delete('public/asdo/images/news/'.$photo);  
        }

        $news->heading = $request->heading;
        $news->slug = Str::slug($request->heading);
        $news->description = $request->description;
        $news->image = $request->image;
        $news->publishing_date = $request->publishing_date;
        $news->ending_date = $request->ending_date;
        $news->image = $filename_with_ext ?? '';
        $result = $news->save();
        
        if($result){
            $request->session()->flash('alert-success', 'News has been updated successfully!');
            return redirect()->route('asdo.news.index');
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.news.create');
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
        //
    }
}
