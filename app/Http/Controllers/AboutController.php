<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all()->first();
        if ($about) {
            return view('pages.about.create', compact('about'));
        }
        return view('pages.about.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image_1' => 'required|image',
            'image_2' => 'nullable|image',
            'image_3' => 'nullable|image',
            'icon' => 'required|image',
        ]);
        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1');
            $name = $image_1->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $image_1 = $image_1->storeAs('file', $file_name, 'public_uploads');
            $data['image_1'] = $image_1;
        };
        if ($request->hasFile('image_2')) {
            $image_2 = $request->file('image_2');
            $name = $image_2->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $image_2 = $image_2->storeAs('file', $file_name, 'public_uploads');
            $data['image_2'] = $image_2;
        };
        if ($request->hasFile('image_3')) {
            $image_3 = $request->file('image_3');
            $name = $image_3->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $image_3 = $image_3->storeAs('file', $file_name, 'public_uploads');
            $data['image_3'] = $image_3;
        };
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $name = $icon->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $icon = $icon->storeAs('file', $file_name, 'public_uploads');
            $data['icon'] = $icon;
        };

        About::create($data);
        session()->flash('success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image_1' => 'nullable|image',
            'image_2' => 'nullable|image',
            'image_3' => 'nullable|image',
            'icon' => 'nullable|image',
        ]);
        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1');
            $name = $image_1->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $image_1 = $image_1->storeAs('file', $file_name, 'public_uploads');
            if ($about->image_1) {
                $about->deleteFile1();
            }
            $data['image_1'] = $image_1;
        };
        if ($request->hasFile('image_2')) {
            $image_2 = $request->file('image_2');
            $name = $image_2->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $image_2 = $image_2->storeAs('file', $file_name, 'public_uploads');
            if ($about->image_2) {
                $about->deleteFile2();
            }
            $data['image_2'] = $image_2;
        };
        if ($request->hasFile('image_3')) {
            $image_3 = $request->file('image_3');
            $name = $image_3->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $image_3 = $image_3->storeAs('file', $file_name, 'public_uploads');
            if ($about->image_3) {
                $about->deleteFile3();
            }
            $data['image_3'] = $image_3;
        };
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $name = $icon->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $icon = $icon->storeAs('file', $file_name, 'public_uploads');
            if ($about->icon) {
                $about->deleteFile4();
            }
            $data['icon'] = $icon;
        };

        $about->update($data);
        session()->flash('success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
